
var $j = jQuery.noConflict();

$j(function($j) {
    $j('.eventCardOver').click((e)=>{
        fetchZePost($j(e.currentTarget).parent().attr('id'),(retour)=>{
            $j('.modal-overlay').toggle().animate({
                opacity:0.8
            },100,()=>{
                $j('.modal').toggle();
                $j('.modal-content').html('').html(retour);
            });
        });

    });
    $j('.modal-overlay').click((e)=>{
        $j(e.currentTarget).animate({
            opacity:0
        },100,()=>{
            $j('.modal-overlay').toggle();
            $j('.modal').toggle();});
    });




});

function fetchZePost(eventID,cb){
    $j.ajax({
        url:'http://localhost/TP2/wp-json/wp/v2/posts/'+eventID}).
    done( (data) => {

            $j.ajax({
                url:'http://localhost/TP2/wp-json/wp/v2/users/'+data.author}).
            done( (data2) => {
                let result='<div class="event-card" style="width:100%; margin:0;">\n' +
                    '    <div class="eventTitleContainer">\n' +
                    '        <h3 class="eventTitle">'+data.title.rendered+'</h3>\n' +
                    '    </div>\n' +
                    '    <div class="event-glance">\n' +
                    '        <div class="host">\n' +
                    '            <h4 class="host__title">Responsable</h4>\n' +
                    '            <div class="host-visual">\n' +
                    '                <img src='+data2.avatar_urls[24]+'" alt="" class="host-visual__image">\n' +
                    '            </div>\n' +
                    '            <h6 class="host__name">\n' +
                                   data2.name +
                    '            </h6>\n' +
                    '        </div>\n' +
                    '    </div>\n' +
                    '    <div class="event-CTA">\n' +
                    '        <p class="event-CTA__legend">\n' +
                               data.excerpt.rendered+'[...] '+
                    '        </p>\n' +
                    '    </div>\n' +
                    '</div>';
                    cb(result);
                }
            );
    }
        );

}

