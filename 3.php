<html>
<head>
    <title>Test 3</title>
</head>
<body>
    <h1>Form menghitung jumlah jabat tangan</h1>
    <form action="#">
        <table>
            <tr>
                <td>Masukan Jumlah Orang</td>
                <td>:</td>
                <td> <input type="text" name="angka" id="angka"></td>
                </tr>
                <td><input type="button" onclick="jbttangan()" value="Ok"></td><br/>
            
            <tr>
                 <td>Hasil</td>
                <td>:</td>
                <td><input type="text" name="" id="result"></td>
            </tr>
        </table>
    </form>
</body>
        <script type="text/javascript">
        function jbttangan() {
            var v1 = document.getElementById('angka').value;
            var i=0;
            var t=0;
            for(i;i<v1;i++){
                t +=i;
            }
           console.log(t);
            var print = document.getElementById('result');
            print.value = t;
        }
        </script>
</html>
