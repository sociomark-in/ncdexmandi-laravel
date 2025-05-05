<div class="loader" id="load"></div>
<script>
    document.onreadystatechange = function() {
        var state = document.readyState
        if (state == 'complete') {
            document.getElementById('interactive');
            document.getElementById('load').style.visibility = "hidden";
        }
    }
</script>
<style>
    #load {
        width: 100%;
        height: 100%;
        position: fixed;
        z-index: 9999;
        background: url("{{ asset('theme02/assets/ncdex-loader.gif') }}") no-repeat center center white
    }
</style>