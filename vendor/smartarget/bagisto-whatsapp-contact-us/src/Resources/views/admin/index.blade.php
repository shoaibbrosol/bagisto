@extends('admin::layouts.master')

@section('page_title')
    Smartarget Whatsapp - Contact Us
@stop

@section('content-wrapper')

    <div style="margin: 20px 30px; border: 1px solid #eee; border-radius: 3px; padding: 5px 15px; font-family: 'Nunito',sans-serif; position: relative">
        <p>❗❗❗ After you saved app settings go to <a target="_blank" href="/admin/configuration/general/content">Configuration -> General -> Content</a> and add lines below to "Custom Javascript" field. <a target="_blank" href="https://smartarget.online/page_contact.html">If you need help - contact us.</a></p>
        <pre style="white-space: normal;">var script = document.createElement("script");script.src = `https://smartarget.online/loader.js?type=int&u=<?=$scriptHash?>&source=bagisto_whatsapp`;document.head.appendChild(script);</pre>
        {{--<div id="copy" style="position: absolute; right: 25px; bottom: 40px; text-align: center; cursor: pointer">
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0z" fill="none"/><path d="M16 1H4c-1.1 0-2 .9-2 2v14h2V3h12V1zm3 4H8c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h11c1.1 0 2-.9 2-2V7c0-1.1-.9-2-2-2zm0 16H8V7h11v14z"/></svg>
            <div id="copy-text">Press to copy</div>
        </div>--}}
    </div>

    <iframe id="frame" frameborder="0" style="width: 100%;"
            src="https://integration.smartarget.online/connect/bagisto/whatsapp/{{$hash}}?url={{$domain}}"></iframe>
    <script>
        document.getElementById('frame').style.height = (document.querySelector('.menubar').clientHeight + 50) + 'px';
        /*let copy = document.getElementById('copy');
        let copyText = document.getElementById('copy-text');

        copy.addEventListener('click', () =>
        {
            copyText.innerHTML = 'copied!';
            setTimeout(() => copyText.innerHTML = 'Press to copy', 1000);

            var el = document.createElement('textarea');
            el.value = `var script = document.createElement('script');script.src = 'https://smartarget.online/loader.js?type=int&u=<?=$scriptHash?>&source=bagisto_whatsapp';script.addEventListener('load', function () {appInit();});document.head.appendChild(script);`;
            el.setAttribute('readonly', '');
            el.style.position = 'absolute';
            el.style.left = '-9999px';
            document.body.appendChild(el);
            el.select();
            document.execCommand('copy');
            document.body.removeChild(el);
        });*/
    </script>

@stop