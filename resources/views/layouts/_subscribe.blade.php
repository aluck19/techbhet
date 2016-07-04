<style>
.subscribe_model {
    background: #80b933;
    color: #fff;
    border-top-left-radius: 4px;
    border-top-right-radius: 4px;
}
#main_subs{
    width: 100%;
    font-weight: bold;
    color: #999;
}
#subs_email{
    width: 70%;
    border-right: 1px solid #ddd;
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
    font-size: 15px;
    height: 38px;
}
#subs_category{
    width: 35%;
}

#subs_message {
    font-size: 16px;
    font-weight: normal;
    word-spacing: 2px;
}
button.btn.btn-success {
    background: #8acc31;
    font-size: 15px;
    border: none;
    font-weight: normal;
    text-transform: uppercase;
    word-spacing: 2px;
}
</style>

<input class="btn btn-primary" type="submit" value="Subscribe to Events" id="subscribe">

{{--onfocus="this.value = null;"--}}
<script>
    $('#subscribe').on('click', function (e) {
        bootbox.dialog({
            title: "<div>Subscribe to events via Email (Powered by Feedburner)</div>",
            message: '<p id="subs_message" >You have to sign up for free subscription of events. It only takes a few seconds...</p>' +
            '<div id="main_subs" class="ui fluid action input"> <select class="ui search dropdown" id="subs_category"><option value="TechBhet">All Events</option> <option value="TechBhetMeetups">Meetups</option> <option value="TechBhetHackathons">Hackathons</option> <option value="Workshops">Workshops</option><option value="TechBhetCompetitions">Competitions</option><option value="TechBhetTalks">Talks</option><option value="TechBhetOthers">Others</option></select> ' +
            '<input  type="email" id="subs_email"   size="30" placeholder="Enter email address"  name="subs_email" required=""/></div>',
            buttons: {
                success: {
                    label: "Click here to subscribe the events",
                    className: "btn-success",
                    callback: function () {
                        var name = $('#subs_category').val();
                        var email = $('#subs_email').val();
                        window.open("http://feedburner.google.com/fb/a/mailverify?uri=" + name + "&email=" + email);
                        return false;
                    }
                }
            }
        });
    });
</script>