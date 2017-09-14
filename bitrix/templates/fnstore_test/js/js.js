jQuery(document).ready(function(){
	
    /*Animate scroll*/
    $(".scroll_link").click(function(){
        var elementClick = $(this).attr("href");
        var destination = $(elementClick).offset().top;
        $("html, body").animate({
            scrollTop : destination
        },1000);
        return false;
    });

    /*Кнопка поделиться в соц сеть*/
	 $("#share_block > a").click(function(){
        $(this).next().toggleClass("active");
        return false;
    });

	 /*ПОКАЗАТЬ ПОИСК*/
    $(".search_but").click(function(){
        $("#search_top").addClass("active");
        return false;
    });
    /*СКРЫТЬ ПОИСК*/
    $(".cls_search").click(function(){
        $("#search_top").removeClass("active");
        return false;
    });

    /*ПОКАЗАТЬ МЕГА МЕНЮ*/
    $(".burger").click(function(){
        $("#mega_menu").toggleClass("active");
        return false;
    });

    /*ПОКАЗАТЬ ВЫДАЩИЙ СПИСОК ТОВАРОВ*/
    $(".busket_ico").click(function(){
        $("#cart_tovar").toggleClass("active");
        return false;
    });

    /*Accordion script*/
     $(".filtr_block .filtr_option").prev().click(function(){
        $(this).next().slideToggle().resize();
     });

    /*Tabs script*/
    $("#all_tabs [id^='tabs_']").not(":first").hide();
    $("#top_tabs_block li").click(function(){
        $("#top_tabs_block li").removeClass("active").eq($(this).index()).addClass("active");
        $("#all_tabs [id^='tabs_']").hide().eq($(this).index()).fadeIn().resize();
    }).eq(0).addClass("active");

     //E-mail Ajax Send
    $("form").submit(function() {
        var th = $(this);
        $.ajax({
            type: "POST",
            url: "mail.php",
            data: th.serialize()
        }).done(function() {
            alert("Thank you!");
            setTimeout(function() {
                th.trigger("reset");
            }, 1000);
        });
        return false;
    });
	
	
	/*SCROLL TOP*/
	$(window).scroll(function () {
		var thsScrol = $(this).scrollTop();
	});
	
	/*RESIZE WINDOW*/
	$(window).resize(function() {
	    //$('body').prepend('<div>' + $(window).width() + '</div>');
	});

});/*end Ready*/


$(document).ready(function () {

    var myDate = new Date();

    function returnEndDate(d,h,m){
        myDate.setDate(myDate.getDate()+d);
        myDate.setHours(myDate.getHours()+h);
        myDate.setMinutes(myDate.getMinutes()+m);
        return myDate;
    }

    var dateEnd = null;
    if($.cookie("timer")){
        dateEnd = $.cookie("timer");
    } else {
        dateEnd = returnEndDate(7,3,10);
        $.cookie("timer", dateEnd, {expires: 7});
    }


    //код jQuery
    //функция вызова таймера
    function get_timer() {
        //Дата для обратного отсчета
        //var date_new = "April 29,2017 23:59";
        var date_new = dateEnd;

        ////////////////////////////////////
        ////////////////////////////////////
        //Объект даты для обратного отсчета
        var date_t = new Date(date_new);
        //Объект текущей даты
        var date = new Date();
        //Вычесляем сколько миллисекунд пройдет
        //от текущей даты до даты отсчета времени
        var timer = date_t - date;

        //Проверяем не нужно ли закончить отсчет
        //если дата отсчета еще не истекла, то количество
        //миллисекунд в переменной date_t будет больше чем в переменной date
        if(date_t > date) {
            //Вычисляем сколько осталось дней до даты отсчета.
            //Для этого количество миллисекунд до даты остчета делим
            //на количество миллисекунд в одном дне
            var day = parseInt(timer/(60*60*1000*24));
            //если полученное число меньше 10 прибавляем 0
            if(day < 10) {
                day = '00' + day;
            }
            //Приводим результат к строке
            day = day.toString();
            //Вычисляем сколько осталось часов до даты отсчета.
            //Для этого переменную timer делим на количество
            //миллисекунд в одном часе и отбрасываем дни
            var hour = parseInt(timer/(60*60*1000))%24;
            //если полученное число меньше 10 прибавляем 0
            if(hour < 10) {
                hour = '0' + hour;
            }
            //Приводим результат к строке
            hour = hour.toString();
            //Вычисляем сколько осталось минут до даты отсчета.
            //Для этого переменную timer делим на количество
            //миллисекунд в одной минуте и отбрасываем часы
            var min = parseInt(timer/(1000*60))%60;
            //если полученное число меньше 10 прибавляем 0
            if(min < 10) {
                min = '0' + min;
            }
            //Приводим результат к строке
            min = min.toString();
            //Вычисляем сколько осталось секунд до даты отсчета.
            //Для этого переменную timer делим на количество
            //миллисекунд в одной минуте и отбрасываем минуты
            var sec = parseInt(timer/1000)%60;
            //если полученное число меньше 10 прибавляем 0
            if(sec < 10) {
                sec = '0' + sec;
            }
            //Приводим результат к строке
            sec = sec.toString();
            //Выводим дни
            //Проверяем какие предыдущие цифры времени должны вывестись на экран

            //Для сотен дней
            if(day[0] == 9 &&
                hour[0] == 2 &&
                hour[1] == 3 &&
                min[0] == 5 &&
                min[1] == 9 &&
                sec[0] == 5 &&
                sec[1] == 9) {
                animation($("#day0"),day[0]);
            }
            else {
                $("#day0").html(day[0]);
            }
            //Для десятков дней
            if(day[1] == 9 &&
                hour[0] == 2 &&
                hour[1] == 3 &&
                min[0] == 5 &&
                min[1] == 9 &&
                sec[0] == 5 &&
                sec[1] == 9) {
                animation($("#day1"),day[1]);
            }
            else {
                $("#day1").html(day[1]);
            }
            //Для единиц дней
            if(day[2] == 9 &&
                hour[0] == 2 &&
                hour[1] == 3 &&
                min[0] == 5 &&
                min[1] == 9 &&
                sec[0] == 5 &&
                sec[1] == 9) {
                animation($("#day2"),day[2]);
            }
            else {
                $("#day2").html(day[2]);
            }
            //Выводим часы
            //Проверяем какие предыдущие цифры времени должны вывестись на экран
            //Для десятков часов
            if(hour[1] == 3 &&
                min[0] == 5 &&
                min[1] == 9 &&
                sec[0] == 5 &&
                sec[1] == 9) {
                animation($("#hour0"),hour[0]);
            }
            else {
                $("#hour0").html(hour[0]);
            }
            //Для единиц чассов
            if(min[0] == 5 &&
                min[1] == 9 &&
                sec[0] == 5 &&
                sec[1] == 9) {
                animation($("#hour1"),hour[1]);
            }
            else {
                $("#hour1").html(hour[1]);
            }
            //Выводим минуты
            //Проверяем какие предыдущие цифры времени должны вывестись на экран
            //Для десятков минут
            if(min[1] == 9 &&
                sec[0] == 5 &&
                sec[1] == 9) {
                animation($("#min0"),min[0]);
            }
            else {
                $("#min0").html(min[0]);
            }
            //Для единиц минут
            if(sec[0] == 5 && sec[1] == 9) {
                animation($("#min1"),min[1]);
            }
            else {
                $("#min1").html(min[1]);
            }
            //Выводим секунды
            //Проверяем какие предыдущие цифры времени должны вывестись на экран
            //Для десятков секунд
            if(sec[1] == 9) {
                animation($("#sec0"),sec[0]);
            }
            else {
                $("#sec0").html(sec[0]);
            }
            animation($("#sec1"),sec[1]);
            //Переодически вызываем созданную функцию,
            //интервал вызова одна секунда(1000 милли секунд)
            setTimeout(get_timer,1000);
        }
        else {
            $("#clock").html("<span id='stop'>Акция окончена!!!</span>");
        }

    }

    //Функция для красивого отображения времени.
    function animation(vibor,param) {
        vibor.html(param)
            .css({'marginTop':'-20px','opacity':'0'})
            .animate({'marginTop':'0px','opacity':'1'});
    }
    //Вызываем функцию на исполнение
    get_timer();
});
