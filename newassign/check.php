<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title></title>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
</head>
<script type="text/javascript">
    $(document).ready(function () {
        $('#chkSalesCanView').change(function () {
            $('#chklblSalesBillReportCanView').attr('checked', $(this).is(":checked"));
            $('#chkSalesBillReturnReportCanView').attr('checked', $(this).is(":checked"));
        });
        $('#chkSalesCanPrint').change(function () {
            $('#chklblSalesBillReportCanPrint').attr('checked', $(this).is(":checked"));
            $('#chkSalesBillReturnReportCanPrint').attr('checked', $(this).is(":checked"));
        });
        $('#chkSalesCanExport').change(function () {
            $('#chklblSalesBillReportCanExport').attr('checked', $(this).is(":checked"));
            $('#chkSalesBillReturnReportCanExport').attr('checked', $(this).is(":checked"));
        });
        $('#chklblSalesBillReportCanView').change(function () {
            $('#chkSalesCanView').attr('checked', $(this).is(":checked"));
            if ($(this).is(":checked") == false) {
                $('#chkSalesCanView').attr('checked', $('#chkSalesBillReturnReportCanView').is(":checked"));
            }
        });
        $('#chkSalesBillReturnReportCanView').change(function () {
            $('#chkSalesCanView').attr('checked', $(this).is(":checked"));
            if ($(this).is(":checked") == false) {
                $('#chkSalesCanView').attr('checked', $('#chklblSalesBillReportCanView').is(":checked"));
            }
        });

        $('#chklblSalesBillReportCanPrint').change(function () {
            $('#chkSalesCanPrint').attr('checked', $(this).is(":checked"));
            if ($(this).is(":checked") == false) {
                $('#chkSalesCanPrint').attr('checked', $('#chkSalesBillReturnReportCanPrint').is(":checked"));
            }
        });
        $('#chkSalesBillReturnReportCanPrint').change(function () {
            $('#chkSalesCanPrint').attr('checked', $(this).is(":checked"));
            if ($(this).is(":checked") == false) {
                $('#chkSalesCanPrint').attr('checked', $('#chklblSalesBillReportCanPrint').is(":checked"));
            }
        });

        $('#chklblSalesBillReportCanExport').change(function () {
            $('#chkSalesCanExport').attr('checked', $(this).is(":checked"));
            if ($(this).is(":checked") == false) {
                $('#chkSalesCanExport').attr('checked', $('#chkSalesBillReturnReportCanExport').is(":checked"));
            }
        });
        $('#chkSalesBillReturnReportCanExport').change(function () {
            $('#chkSalesCanExport').attr('checked', $(this).is(":checked"));
            if ($(this).is(":checked") == false) {
                $('#chkSalesCanExport').attr('checked', $('#chklblSalesBillReportCanExport').is(":checked"));
            }
        });

    });
</script>
<body>
    <table class="EU_DataTable" cellspacing="0" rules="all" border="1" id="ContentPlaceHolder1_dgvGridView"
        style="border-collapse: collapse;">
        <tr align="left">
            <td align="center">
                <span id="lblSales" style="padding: 50px;">aa</span>
            </td>
            <td align="center">
            </td>
            <td align="center">
            </td>
            <td align="center">
                <input id="chkSalesCanView" type="checkbox" name="" class="chkSalesCanView" />
            </td>
            <td align="center">
            </td>
            <td align="center">
              input  <input id="chkSalesCanPrint" type="checkbox" name="" class="chkSalesCanPrint" />
            </td>
            <td align="center">
                <input id="chkSalesCanExport" type="checkbox" name="" class="chkSalesCanExport" />
            </td>
        </tr>
        <tr align="left">
            <td align="center">
                <span id="lblSalesBillReport" style="padding: 100px;">bb</span>
            </td>
            <td align="center">
            </td>
            <td align="center">
            </td>
            <td align="center">
                <input id="chklblSalesBillReportCanView" type="checkbox" name="" class="chklblSalesBillReportCanView" />
            </td>
            <td align="center">
            </td>
            <td align="center">
                <input id="chklblSalesBillReportCanPrint" type="checkbox" name="" class="chklblSalesBillReportCanPrint" />
            </td>
            <td align="center">
                <input id="chklblSalesBillReportCanExport" type="checkbox" name="" class="chklblSalesBillReportCanExport" />
            </td>
        </tr>
        <tr align="left">
            <td align="center">
                <span id="lblSalesBillReturnReport" style="padding: 100px;">cc</span>
            </td>
            <td align="center">
            </td>
            <td align="center">
            </td>
            <td align="center">
                <input id="chkSalesBillReturnReportCanView" type="checkbox" name="" class="chkSalesBillReturnReportCanView" />
            </td>
            <td align="center">
            </td>
            <td align="center">
                <input id="chkSalesBillReturnReportCanPrint" type="checkbox" name="" class="chkSalesBillReturnReportCanPrint" />
            </td>
            <td align="center">
                <input id="chkSalesBillReturnReportCanExport" type="checkbox" name="" class="chkSalesBillReturnReportCanExport" />
            </td>
        </tr>
    </table>
</body>
</html>
