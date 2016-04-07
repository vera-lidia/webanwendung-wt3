            function eingabeAnUrlAnhaengen()
              {
                var input = document.getElementById("eingabe").value;

                $.get("http://pod.opendatasoft.com/api/records/1.0/search/?dataset=pod_nutrition_us&q=gtin_cd:" + input, function(data) 
                  {
                    console.log(data);
                    console.log(data.records[0].fields.gtin_img);
                    $('#kreis2').css('background-image', 'url(' + data.records[0].fields.gtin_img +')');
                    
                    
                                  ingrArr = data.records[0].fields.ingredients.split(' ');
              bl=["BUTTER","MILK","EGG","YOGURT","CREAM", "CHICKEN", "BEEF", "PORK", "HONEY", "CHEESE"];
              for(var i = 0; i < ingrArr.length; i++) {
                  var ingr = ingrArr[i];
                  ingr = ingr.toUpperCase();
                  if (bl.indexOf(ingr) > -1) {
                    console.log('nicht vegan');
                    $('#kreis3').css('background-image', 'url("img/x.jpg")');
                  }
                  else{
                  console.log('vegan')
                   $('#kreis3').css('background-image', 'url("img/haken.jpg")');   
                }
 
                }
            });
                      }