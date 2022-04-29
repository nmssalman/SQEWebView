<!DOCTYPE html>
<html lang="en">

<head>
    @extends('layout.loginheader')
</head>
<meta name="robots" content="noindex, follow">
<script nonce="7440e38d-01cd-4b53-8a48-8ad74d2d67a2">
    (function(w, d) {
        ! function(a, e, t, r) {
            a.zarazData = a.zarazData || {}, a.zarazData.executed = [], a.zaraz = {
                deferred: []
            }, a.zaraz.q = [], a.zaraz._f = function(e) {
                return function() {
                    var t = Array.prototype.slice.call(arguments);
                    a.zaraz.q.push({
                        m: e,
                        a: t
                    })
                }
            };
            for (const e of ["track", "set", "ecommerce", "debug"]) a.zaraz[e] = a.zaraz._f(e);
            a.addEventListener("DOMContentLoaded", (() => {
                var t = e.getElementsByTagName(r)[0],
                    z = e.createElement(r),
                    n = e.getElementsByTagName("title")[0];
                for (n && (a.zarazData.t = e.getElementsByTagName("title")[0].text), a.zarazData.w = a
                    .screen.width, a.zarazData.h = a.screen.height, a.zarazData.j = a.innerHeight, a
                    .zarazData.e = a.innerWidth, a.zarazData.l = a.location.href, a.zarazData.r = e
                    .referrer, a.zarazData.k = a.screen.colorDepth, a.zarazData.n = e.characterSet, a
                    .zarazData.o = (new Date).getTimezoneOffset(), a.zarazData.q = []; a.zaraz.q.length;
                    ) {
                    const e = a.zaraz.q.shift();
                    a.zarazData.q.push(e)
                }
                z.defer = !0, z.referrerPolicy = "origin", z.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(
                    encodeURIComponent(JSON.stringify(a.zarazData))), t.parentNode.insertBefore(z,
                    t)
            }))
        }(w, d, 0, "script");
    })(window, document);
</script>
</head>

<body style="background-color: #666666;">
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form class="login100-form validate-form">
                    <span class="login100-form-title p-b-43">
                        Job Seaker Login
                    </span>
                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <input class="input100" type="text" name="email">
                        <span class="focus-input100"></span>
                        <span class="label-input100">Email</span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input class="input100" type="password" name="pass">
                        <span class="focus-input100"></span>
                        <span class="label-input100">Password</span>
                    </div>
                    <div class="flex-sb-m w-full p-t-3 p-b-32">
                        <div class="contact100-form-checkbox">
                            <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                            <label class="label-checkbox100" for="ckb1">
                                Remember me
                            </label>
                        </div>
                        <div>
                            <a href="#" class="txt1">
                                Forgot Password?
                            </a>
                        </div>
                    </div>
                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            Login
                        </button>
                    </div>
                     
                </form>
                <div class="login100-more"
                    style="background-image: url('https://thumbs.dreamstime.com/b/job-search-human-resources-recruitment-career-business-internet-technology-concept-job-search-human-resources-recruitment-career-101330689.jpg');">
                </div>
            </div>
        </div>
    </div>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194"
        integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw=="
        data-cf-beacon='{"rayId":"7038b365bca34912","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.12.0","si":100}'
        crossorigin="anonymous"></script>
</body>

</html>
