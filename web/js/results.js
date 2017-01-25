$(function () {
    "use strict"

    function loadData(name) {
        return $.ajax({
            type: "GET",
            url: "/php/results.php",
            data: {req: "userdata", data: name}
        });
    }

    function loadResults(user) {
        return $.ajax({
            type: "GET",
            url: "/php/results.php",
            data: {req: "trendData", }
        });
    }

    function show_prompt() {
        var name;
        do {
            name=prompt("Please enter the id you previously entered:");
        }
        while(name.length < 1);
        $('#myinput').val(name);

        loadData(name)
            .done( function(results) {
                var connections = results.connections,
                    pop = results.pop,
                    age = results.age,
                    group = results.group;


                $('u-avg').append(connections);
                $('p-avg').append(pop.Total);
                $('g-avg').append(group.Total);
                $('a-avg').append(age.Total);
            })
            .fail( function () {
                alert("Failed to load user data.")
            });
    }

})