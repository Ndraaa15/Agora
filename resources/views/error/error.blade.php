@if($errors->any())
<script>
    alert('{{$errors->first()}}');
</script>
@endif
