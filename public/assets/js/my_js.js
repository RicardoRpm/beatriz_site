<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $("#frm-create-post").validate({

        submitHandler: function() {

            var name = $("#name").val();
            var description = $("#description").val();
            var status = $("#status").val();

            // processing ajax request    
            $.ajax({
                url: "{{ route('postSubmit') }}",
                type: 'POST',
                dataType: "json",
                data: {
                    name: name,
                    description: description,
                    status: status
                },
                success: function(data) {
                    // log response into console
                    console.log(data);
                }
            });
        }
    });
</script>