$(document).ready(function(){
    let pag = 1;
    let c = 1;
    $("#pgPrimero").click(function(){
        pag = 1;
        c = 1;
        $(".list-group-item span").each(function(){
            $(this).text("Ejercicio " + c);
            c++;
        });
    });

    $("#pgAnterior").click(function(){
        if(pag > 1){
            pag --;
            if(pag == 1){
                c = 1;
            }else{
                c = 9;
            }
            $(".list-group-item span").each(function(){
                $(this).text("Ejercicio " + c);
                c++;
            });
        }
    });

    $("#pgSiguiente").click(function(){
        if(pag < 3){
            pag ++;
            if(pag == 2){
                c = 9;
            }else{
                c = 17;
            }
            $(".list-group-item span").each(function(){
                $(this).text("Ejercicio " + c);
                c++;
            });
        }
    });

    $("#pgUltimo").click(function(){
        pag = 3;
        c = 17;
        $(".list-group-item span").each(function(){
            $(this).text("Ejercicio " + c);
            c++;
        });
    });
});