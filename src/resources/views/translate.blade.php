<!DOCTYPE html>
<html>

<head>
    <style type="text/css">
        #goog-gt-tt {
            display: none !important;
        }

        .goog-te-banner-frame {
            display: none !important;
        }

        .goog-te-menu-value:hover {
            text-decoration: none !important;
        }

        body {
            top: 0 !important;
        }

        #google_translate_element2 {
            display: none !important;
        }

        .lg {
            width: 125px;
            height: 25px;
            margin-top: 5px;
        }

        .skiptranslate {
            display: none;
        }

        * {
            box-sizing: border-box;
        }

        .fab-wrapper {
            position: fixed;
            bottom: 3rem;
            right: 3rem;
        }

        .fab-checkbox {
            display: none;
        }

        .fab {
            position: absolute;
            bottom: -1rem;
            right: -1rem;
            width: 4rem;
            height: 4rem;
            background: rgb(102, 0, 0);
            border-radius: 50%;
            background: #470000;
            box-shadow: 0px 5px 20px #515151;
            transition: all 0.3s ease;
            z-index: 1;
            border-bottom-right-radius: 6px;
            border: 1px solid #c9c9c9;
        }

        .fab:before {
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            left: 0;
            top: 0;
            border-radius: 50%;
            background-color: rgba(255, 255, 255, 0.1);
        }

        .fab-checkbox:checked~.fab:before {
            width: 90%;
            height: 90%;
            left: 5%;
            top: 5%;
            background-color: rgba(255, 255, 255, 0.2);
        }

        .fab:hover {
            background: #e82c2cb1;
            box-shadow: 0px 5px 20px 5px #81a4f1;
        }

        .fab-dots {
            position: absolute;
            height: 8px;
            width: 8px;
            background-color: white;
            border-radius: 50%;
            top: 50%;
            transform: translateX(0%) translateY(-50%) rotate(0deg);
            opacity: 1;
            animation: blink 3s ease infinite;
            transition: all 0.3s ease;
        }

        .fab-dots-1 {
            left: 15px;
            animation-delay: 0s;
        }

        .fab-dots-2 {
            left: 50%;
            transform: translateX(-50%) translateY(-50%);
            animation-delay: 0.4s;
        }

        .fab-dots-3 {
            right: 15px;
            animation-delay: 0.8s;
        }

        .fab-checkbox:checked~.fab .fab-dots {
            height: 6px;
        }

        .fab .fab-dots-2 {
            transform: translateX(-50%) translateY(-50%) rotate(0deg);
        }

        .fab-checkbox:checked~.fab .fab-dots-1 {
            width: 32px;
            border-radius: 10px;
            left: 50%;
            transform: translateX(-50%) translateY(-50%) rotate(45deg);
        }

        .fab-checkbox:checked~.fab .fab-dots-3 {
            width: 32px;
            border-radius: 10px;
            right: 50%;
            transform: translateX(50%) translateY(-50%) rotate(-45deg);
        }

        @keyframes blink {
            50% {
                opacity: 0.25;
            }
        }

        .fab-checkbox:checked~.fab .fab-dots {
            animation: none;
        }

        .fab-wheel {
            position: absolute;
            bottom: 0;
            right: 0;
            width: 10rem;
            height: 10rem;
            transition: all 0.3s ease;
            transform-origin: bottom right;
            transform: scale(0);
        }

        .fab-checkbox:checked~.fab-wheel {
            transform: scale(1);
        }

        .fab-action {
            bottom: 0;
            border-radius: 10px;
            position: absolute;
            background: #8f8f8f8e;
            width: 10rem;
            height: 3rem;
            display: flex;
            justify-content: end;
            color: White;
            transition: all 1s ease;

            opacity: 0;
        }

        .fab-checkbox:checked~.fab-wheel .fab-action {
            opacity: 1;
        }

        .fab-action:hover {
            background-color: #b5b5b5;
        }

        .fab-wheel .fab-action-2 {
            right: 0;
            top: 3rem;
        }
    </style>
</head>

<body>
    <div id="google_translate_element2"></div>

    <div class="fab-wrapper">
        <input id="fabCheckbox" type="checkbox" class="fab-checkbox" />
        <label class="fab" for="fabCheckbox">
            <span class="fab-dots fab-dots-2"></span>
        </label>
        <div class="fab-wheel">
            <select onchange="doGTranslate(this);" class="fab-action fab-action-2 ">
                <option disabled="disabled" selected>Bahasa</option>
                <option value="id|en">Eng</option>
                <option value="id|id">Ind</option>
            </select>
        </div>
    </div>


    <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2">
    </script>
    <script src="{{ asset('rikimukhraa/gtranslator/js/script.js') }}"></script>
    <script type="text/javascript">
        function googleTranslateElementInit2() {
            new google.translate.TranslateElement({
                    pageLanguage: "id",
                    autoDisplay: false,
                },

                "google_translate_element2"
            );
        }

        function GTranslateFireEvent(element, event) {
            try {
                if (document.createEventObject) {
                    var evt = document.createEventObject();
                    element.fireEvent("on" + event, evt);
                } else {
                    var evt = document.createEvent("HTMLEvents");
                    evt.initEvent(event, true, true);
                    element.dispatchEvent(evt);
                }
            } catch (e) {}
        }

        function doGTranslate(lang_pair) {
            if (lang_pair.value) lang_pair = lang_pair.value;
            if (lang_pair == "") return;
            var lang = lang_pair.split("|")[1];
            var teCombo;
            var sel = document.getElementsByTagName("select");
            for (var i = 0; i < sel.length; i++)
                if (sel[i].className == "goog-te-combo") teCombo = sel[i];
            if (
                document.getElementById("google_translate_element2") == null ||
                document.getElementById("google_translate_element2").innerHTML.length ==
                0 ||
                teCombo.length == 0 ||
                teCombo.innerHTML.length == 0
            ) {
                setTimeout(function() {
                    doGTranslate(lang_pair);
                }, 500);
            } else {
                teCombo.value = lang;
                GTranslateFireEvent(teCombo, "change");
                GTranslateFireEvent(teCombo, "change");
            }
        }
    </script>
</body>

</html>
