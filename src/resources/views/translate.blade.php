<div id="google_translate_element2">
</div>
<div class="riki-fab-wrapper">
    <input id="riki-fabCheckbox" type="checkbox" class="riki-fab-checkbox" />
    <label class="riki-fab" for="riki-fabCheckbox">
    </label>
    <div class="riki-fab-wheel">
        <select onchange="doGTranslate(this);" class="riki-fab-action riki-fab-action-2">
            <option disabled="disabled" selected>Bahasa</option>
            @foreach (config('bahaso.apo_adonyo') as $langCode => $langName)
                <option value="id|{{ $langCode }}">{{ $langName }}</option>
            @endforeach
        </select>
    </div>
</div>

<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2">
</script>
