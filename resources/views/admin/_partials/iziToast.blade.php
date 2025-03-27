@if (session()->get('error'))
<script>
    iziToast.error(
        {
            title:"Erreur"
            position:"topRight"
            message :'{{ session()->get('error')}}'
        }
    )
</script>
@endif

@if (@session()->get('success'))
    <script>
        iziToast.success({
            title : "Succès",
            position : "topRight",
            message :'{{ session()->get('success')}}'
        })
    </script>

@endif
