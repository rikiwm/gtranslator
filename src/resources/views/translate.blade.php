<link href="assets/css/style.css" rel="stylesheet">

< <div id="google_translate_element2">
    </div>
    <div class="fab-wrapper">
        <input id="fabCheckbox" type="checkbox" class="fab-checkbox" />
        <label class="fab" for="fabCheckbox">
            <span class="fab-dots fab-dots-2"></span>
        </label>
        <div class="fab-wheel">
            <select onchange="doGTranslate(this);" class="fab-action fab-action-2">
                <option disabled="disabled" selected>Bahasa</option>
                <option value="id|en">Eng</option>
                <option value="id|id">Ind</option>
            </select>
        </div>
    </div>


    <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2">
    </script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
