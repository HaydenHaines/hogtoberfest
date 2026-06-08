(function () {
    'use strict';

    var tpl          = document.getElementById('hog-sponsor-row-tpl').innerHTML;
    var rowsEl       = document.getElementById('hog-sponsor-rows');
    var jsonInput    = document.getElementById('hog-sponsors-json');
    var addBtn       = document.getElementById('hog-add-sponsor');
    var form         = document.getElementById('hog-settings-form');

    function buildRow(data) {
        var wrap = document.createElement('div');
        wrap.innerHTML = tpl;
        var row = wrap.firstElementChild;

        if (data) {
            row.querySelector('.hog-sponsor-name').value    = data.sponsor_name    || '';
            row.querySelector('.hog-sponsor-url').value     = data.sponsor_url     || '';
            row.querySelector('.hog-sponsor-logo-id').value = data.sponsor_logo_id || '';
            if (data.sponsor_logo_url) {
                setPreview(row, data.sponsor_logo_url);
            }
        }

        row.querySelector('.hog-remove-sponsor').addEventListener('click', function () {
            row.parentNode.removeChild(row);
        });

        row.querySelector('.hog-upload-logo').addEventListener('click', function () {
            var frame = window.wp.media({
                title:  'Select Sponsor Logo',
                button: { text: 'Use This Image' },
                multiple: false
            });
            frame.on('select', function () {
                var att = frame.state().get('selection').first().toJSON();
                row.querySelector('.hog-sponsor-logo-id').value = att.id;
                setPreview(row, att.url);
            });
            frame.open();
        });

        return row;
    }

    function setPreview(row, url) {
        var el = row.querySelector('.hog-logo-preview');
        el.innerHTML = '<img src="' + url + '" style="max-height:60px;max-width:140px;vertical-align:middle;">';
    }

    // Render existing rows
    try {
        var existing = JSON.parse(jsonInput.value || '[]');
        existing.forEach(function (item) {
            rowsEl.appendChild(buildRow(item));
        });
    } catch (e) {}

    addBtn.addEventListener('click', function () {
        rowsEl.appendChild(buildRow(null));
    });

    // Serialize rows to JSON before submit
    form.addEventListener('submit', function () {
        var rows = rowsEl.querySelectorAll('.hog-sponsor-row');
        var data = [];
        rows.forEach(function (row) {
            var name   = row.querySelector('.hog-sponsor-name').value.trim();
            var logoId = row.querySelector('.hog-sponsor-logo-id').value;
            var url    = row.querySelector('.hog-sponsor-url').value.trim();
            if (name || logoId) {
                data.push({ sponsor_name: name, sponsor_logo_id: logoId, sponsor_url: url });
            }
        });
        jsonInput.value = JSON.stringify(data);
    });
}());
