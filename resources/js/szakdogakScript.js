
$(function() {
    const token=$('meta[name="csrf-token"]').attr('content');
    const ajax=new Ajax(token);
    let szakdogakVegpont="http://127.0.0.1:8000/dashboard";
    const feladatTomb=[];
    
    ajax.getAjax(szakdogakVegpont, szakdogaTomb, szakdogaLista);

    function szakdogaLista(szakdogak) {
        const szuloElem = $("section table tbody");
        const sablonElem = $("aside table tr");
        szuloElem.empty();
        szakdogak.forEach(function(elem) {    
            let sablonClone = sablonElem.clone();
            sablonClone.show();
            let node=sablonClone.appendTo(szuloElem);
            const obj = new Feladat(node, elem);
        });

    }

});