$(function() {
    console.log('stuff12');
   
    var a, b,c;
    c = "<p><a href='" + websiteSettings.relativePathRoot + "member'>Account</a></p><p><a href='" + websiteSettings.relativePathRoot + "member/'>Dashboard</a></p><hr><p><a href='/logout' class='btn btn-default'>Sign Out</a></p>", $("#layout_visitor").popover({
        content: c,
        html: !0,
        placement: "bottom",
        trigger: "focus"
    })
});
