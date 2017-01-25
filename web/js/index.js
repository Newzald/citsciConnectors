/**
 * Created by Ian on 1/23/17.
 */
$(function () {
    "use strict";
    function newPerson (id, age, group, connections){
        return $.ajax({
            type: "POST",
            url: "response.php",
            data: {id: id, age: age, group: group, connections:connections}
        });
    };

    function getResults (id, group){
        return $.ajax({
            type: "GET",
            data: {id: id, group: group},
            url: "response.php"
        });
    };

    var $questionaire = $( '#questionaire' ),
        $surnameCounts = $questionaire.find( '.surname' );


    $questionaire.on( 'submit', function(e) {
        e.preventDefault();

        var surnameSum = 0;
        $surnameCounts.each(function () {
            var value = Number($(this).val());
            if (!isNaN(value)) surnameSum += value;
        });

        var $id = $( '#email_id' ).val(),
            $age = $( '#age' ).val(),
            $group = $( '#group' ).val();

        newPerson($id, $age, $group, $surnameSum);
    });

})