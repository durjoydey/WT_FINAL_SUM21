<script>
    function get(id)
    {
        return document.getElementById(id);
    }
    function searchProducts(e)
    {
        if(e.value == "")
        {
            get("suggestion").innerHTML= "";
            return;
        }
        var xhr = new XMLHttpRequest();
        xhr.open("GET","myprofile.php",true);
        xhr.onreadystatechange=function()
        {
            if (this.readyState== 4 && this.status == 200)
            {
                get("demo").innerHTML = this.responseTEXT;
            }
        };
        xhr.send;
    }
    