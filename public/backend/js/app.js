jQuery(document).ready(function () {
    jQuery(".add-btn").click(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var name = jQuery(".name").val();
        var des = jQuery(".des").val();
        var size = jQuery(".size").val();
        var color = jQuery(".color").val();
        var prd_code = jQuery(".prd_code").val();
        var cost_price = jQuery(".cost_price").val();
        var sales_price = jQuery(".sales_price").val();

        $.ajax({
            url: "/product/store",
            type: "POST",
            dataType: "JSON",
            data: {
                name: name,
                des: des,
                size: size,
                color: color,
                prd_code: prd_code,
                cost_price: cost_price,
                sales_price: sales_price
            },
            success: function (response) {
                if (response.status == "failed") {
                    jQuery(".error_name").text(response.errors.name);
                    jQuery(".error_des").text(response.errors.des);
                    jQuery(".error_size").text(response.errors.size);
                    jQuery(".error_color").text(response.errors.color);
                    jQuery(".error_prd_code").text(response.errors.prd_code);
                    jQuery(".error_cost_price").text(response.errors.cost_price);
                    jQuery(".error_sales_price").text(response.errors.sales_price);
                } else {
                    jQuery(".msg").show().text("Product Added");
                    jQuery(".error_name").text("");
                    jQuery(".error_des").text("");
                    jQuery(".error_size").text("");
                    jQuery(".error_color").text("");
                    jQuery(".error_prd_code").text("");
                    jQuery(".error_cost_price").text("");
                    jQuery(".error_sales_price").text("");
                    jQuery(".name").val("");
                    jQuery(".des").val("");
                    jQuery(".size").val("");
                    jQuery(".color").val("");
                    jQuery(".prd_code").val("");
                    jQuery(".cost_price").val("");
                    jQuery(".sales_price").val("");
                    jQuery(".msg").fadeOut(2000);
                    
                }
            }
        })
    })
})