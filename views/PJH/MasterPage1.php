
<html>
<head>

    <script src="//code.jquery.com/jquery-3.3.1.min.js"></script>
</head>
<style>
    body{
        background-color: cadetblue;
        width: 98.6vw;
        height: 98.3vh;
        color: white;
    }
    .contents{
        margin: auto;
        width: 99%;
        height: 89%;
        background-color: darkcyan;
    }
    header{
        margin: auto;
        width: 99%;
        height: 10%;
        background-color: lightsteelblue;
    }
    header table {
        text-align: center;
        height: 100%;
        width: 100%;
    }
    header table .td1{
        border: 1px solid black;
        width: 10%;
    }
    header table td{
        border: 1px solid black;
    }

</style>

<body>
<header>

    <table>
        <tr>
            <td class="td1">
                WRITER
            </td>
            <td class="td2">
             <?=$name?>
            </td>
            <td class="td1">
                LAST UPDATE
            </td>
            <td class="td2">
              마지막 날짜 <!-- <?=$end_date?>-->
            </td>
        </tr>



    </table>

</header>

<div class="contents">

    <mp:content />
</div>




</body>
</html>