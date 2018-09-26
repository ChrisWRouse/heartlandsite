jQuery(function($) {

    d.addEventListener("resize", function() {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.1&appId=1625468864407552&autoLogAppEvents=1';
        fjs.parentNode.insertBefore(js, fjs);
        });
});