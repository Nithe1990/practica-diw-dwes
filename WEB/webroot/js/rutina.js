$(document).ready(function(){
    let pag = 1;
    let c = 0;
    $("#pgPrimero").click(function(){
        pag = 1;
        c = 0;
        $("span").each(function(){
            $(this).text("Ejercicio " + c);
            c++;
        });
    });

    $("#pgAnterior").click(function(){
        if(pag > 1){
            pag --;
            if(pag == 1){
                c = 0;
            }else{
                c = 8;
            }
            $("span").each(function(){
                $(this).text("Ejercicio " + c);
                c++;
            });
        }
    });

    $("#pgSiguiente").click(function(){
        if(pag < 3){
            pag ++;
            if(pag == 2){
                c = 8;
            }else{
                c = 16;
            }
            $("span").each(function(){
                $(this).text("Ejercicio " + c);
                c++;
            });
        }
    });

    $("#pgUltimo").click(function(){
        pag = 3;
        c = 16;
        $("span").each(function(){
            $(this).text("Ejercicio " + c);
            c++;
        });
    });
});