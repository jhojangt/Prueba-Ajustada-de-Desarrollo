  $(function () {
        $('#datetimepickerFechaIni').datetimepicker();
        $('#datetimepickerFechaFin').datetimepicker({
            useCurrent: false
        });
        $("#datetimepickerFechaIni").on("change.datetimepicker", function (e) {
            $('#datetimepickerFechaFin').datetimepicker('minDate', e.date);
        });
        $("#datetimepickerFechaFin").on("change.datetimepicker", function (e) {
            $('#datetimepickerFechaIni').datetimepicker('maxDate', e.date);
        });
    });