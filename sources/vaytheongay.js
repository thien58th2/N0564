$("#btnvay").click(function()
    {
        var sotienvay=$(".nhantien").val().trim();
        var ngayvay=$(".ngayvay").val().trim();
        var stcv=$("#stcv").val().trim();
        var sttt=$("#sttt").val().trim();
        var sttghn=$("#sttghn").val().trim();

        $.ajax({
            type:"POST",
            url:"php/chovaytheongay.php",
            data:{nhantien:sotienvay;
            ngayvay:ngayvay,
            stcv:stcv,
            sttt:sttt;
            sttghn:sttghn},
            dataType:'text',
            success: funtion(response){alert(response;
            )}

        })
    }
    )