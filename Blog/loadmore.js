$(document).ready(function(){

    
    //Artikel-Div, dessen inhalt (die einzelnen Artikel) und die Anzahl der standardm‰ﬂig sichtbaren Artikel speichern
    var blog = $("#articles");
    var articles = blog.children();
    var visible = 2;
    
   
    //Zun‰chst alle artikel unsichtbar machen
    articles.each(function(){
        $(this).addClass("invisible");
    });
    
    //Dann die ersten 2 wieder sichtbar machen
    articles.each(function(){
        
        $(this).removeClass("invisible");
        
       if($(this).is("article:nth-of-type(2)")){
           return false;
       }    
    });
        
    
    
    //Bei einem Klick auf den loadmore-Div wird den n‰chsten 5 Artikeln die unsichtbarkeitsklasse entfernt
    //Es werden also 5 weitere Artikel sichtbar
    //Bei jedem durchlauf der schleife wird auh die visible variable hochgez‰hlt
    //damit diese bei erneutem klicken auf loadmore dort weiter machen kann wo das letzte mal gestoppt wurde
    $("#loadmore").click(function(){
        var currVisible = visible;
        
        for(var i=0; i < 5; i++){
            visible++;
            $("article:nth-of-type("+visible+")").removeClass("invisible");
            
            if(visible >= articles.length){
                $("#loadmore").addClass("invisible");
                return false;
            }
        }
    });
    
});
