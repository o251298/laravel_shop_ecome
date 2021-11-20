$(document).ready(function () {
    var route = 'https://api.novaposhta.ua/v2.0/json/';
    var api_key = "5bd1ad9455c5847e852bbfd4c51e329a";
    var date_type = "application/json";
    $('#country').typeahead({
        source: function (query, result) {
            var objects = [];
            map = {};
            var request_data = {
                apiKey: api_key,
                modelName: "Address",
                calledMethod: "searchSettlements",
                methodProperties: {
                    CityName: query,
                    Limit: 5
                }
            };
            $.ajax({
                url: route,
                method: 'POST',
                data: JSON.stringify(request_data),
                contentType: date_type,
                success: function (data) {
                    $.each(data.data[0].Addresses, function(i, object) {
                        //console.log(object.Present);
                        map[object.Present] = object.DeliveryCity;
                        objects.push(object.Present);
                    });
                    result(objects);
                },
            });
        },
        updater: function(item) {
            var request_data = {
                modelName: "AddressGeneral",
                calledMethod: "getWarehouses",
                methodProperties: {
                    Language: "ru",
                    CityRef: map[item],
                    Limit : 35
                },
                apiKey: api_key
            }
            $.ajax({
                url: route,
                method: 'POST',
                data: JSON.stringify(request_data),
                contentType: date_type,
                success: function (data) {
                    $('.item-ss').remove();
                    $('#select').prop('disabled', false);
                    $.each(data.data, function(i, object) {
                        $('#select').append("<option class='item-ss' data-value=" + object.Description + ">" + object.Description + "</option>");
                    });
                },
            });
            $('#delivery_city').val(map[item]);
            return item;
        }
    });
});
