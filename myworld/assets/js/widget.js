




var jsonData = [];
var current_lang ='en';
var host = $('#base_directory').text();

shuffle = function(o){ 
	for(var j, x, i = o.length; i; j = parseInt(Math.random() * i), x = o[--i], o[i] = o[j], o[j] = x);
	return o;
};


$.getJSON(host + '/assets/js/langs/' + current_lang + '.json', function (data) {
	
	$('#vote-header').append(data.html_values['vote-header']);

	$('#priority-item-title').append(data.html_values['priority-item-title']);

	$('#priority-item-content').attr('placeholder',data.various_values['priority-item-content']);

    var items = data.accordion_items;
    var numbers = [
        1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16
    ];
    var random_numbers = shuffle(numbers);
    
    var output = '';
    
    var i = 0;

    for(i = 0; i<random_numbers.length; i++){
        var accordion_item = items[random_numbers[i]];
        
       output += '<h3 > <span class="box arrow-down" style="background-color: '+accordion_item['item-color']+'">  </span> <a id="'+accordion_item['prefix']+'-item-title" href="#">'+accordion_item['item-title']+'</a>  <span class="check-wrap checked-off"> <input type="checkbox" class="check-value" name="check-values[]" value="'+random_numbers[i]+'"> </span></h3> <article> <ul><li>'+accordion_item['item-content']+'</li></ul></article>';
    


    }
    

     
    $('div.accordion.vote-form').prepend(output);
    

    jsonData = data;

     docready();

});

function docready(){
	$(document).ready(function(){

		     var count=0;

		    /*------- ACCORDION: switch "arrows up and down" & "plus/minus sign" --------------*/
			$('.accordion').accordion('refresh');

			$( ".accordion" ).accordion({
		    header:'h3',
		    collapsible: true, active: false,
		    heightStyle: "content"
		    
		    });

		     $("div.accordion.vote-form h3").on('click',function(){
		        var spanBox = $(this).children('span.box');
		        if(spanBox.hasClass('active-box')){//user has clicked on an already extended accordion
		            spanBox.toggleClass('arrow-down arrow-up');
		        } else{//user clicks to open a new accordion
		            $('span.box').removeClass('arrow-up active-box').addClass('arrow-down');//reset all
		            spanBox.removeClass('arrow-down').addClass('arrow-up active-box');//set the arrow up on clicked accordion
		        }
		     });

		     $(".suggest-priority h4").on('click',function(){
		     	var priorityBox = $(this).children('span.box');
		     	priorityBox.toggleClass('plus-sign minus-sign');
		     	$("#priority-item-content-wrap").slideToggle();
		     	

		     });




		     /*------ ACCORDION: set as "checked-on" or "checked-off" --------*/
		     $('.accordion h3 .check-wrap').click(function (e) {

	            if($(this).hasClass('checked-on')) {
	                $(this).closest('h3').find('.check-value').attr('checked', false);
	                $(this).removeClass('checked-on').addClass('checked-off');
	                count--;
	            }else{
	                if(count == 6) {
	                	alert('You already have 6 priorities checked!');
	                    return;
	                }

	                $(this).closest('h3').find('.check-value').attr('checked', true);
	                $(this).removeClass('checked-off').addClass('checked-on');
	                count++;
	            }

	            alert(count+'/6');
            
            });

	     
   });
};




