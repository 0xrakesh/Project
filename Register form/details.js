window.onload = function(){
        // Open the file
        Papa.parse("student-detail.csv",
        {
            download: true,
            header: false,
            skipEmptyLines: true,
            complete: function(results){
                document.getElementById("table-body").innerHTML = "";
                for(i = 0; i < results.data.length; i++){
                    document.getElementById("table-body").innerHTML += "<tr>";
                    document.getElementById("table-body").innerHTML += "<td>"+results.data[i][0]+"</td><td>"+results.data[i][1]+"</td>";
                    document.getElementById("table-body").innerHTML += "</tr>";                                   
                }
                console.log(results.data); 
            }
        });

} 