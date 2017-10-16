$(document).ready(function(){
            $("#score_nps").click(function(){
                var url = "http://10.100.40.2:3000/categorias-nps"+data
                $.ajax({
                    type: "GET",
                    url: url,
                    data: $("#score_nps").serialize(),
                    success: function(data){
                        $("#resp").html(data);
                    }
                });
            });
       });