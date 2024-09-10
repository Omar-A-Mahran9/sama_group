</div>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="{{ asset('admin/assets/js/bootstrap.bundle.min.js') }}"></script>
{{-- <script src="https://cdn.ckeditor.com/ckeditor5/41.2.0/classic/ckeditor.js"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

<script src="https://cdn.datatables.net/2.0.2/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.0.2/js/dataTables.bootstrap5.js"></script>
<script src="{{ asset('admin/assets/js/script.js') }}"></script>
@yield('script')
<!-- Summernote -->
<script>
    $(document).ready(function() {
        $('.summernote').summernote({
            height: 300,
            callbacks: {
                onPaste: function(e) {
                    var bufferText = ((e.originalEvent || e).clipboardData || window.clipboardData).getData('Text');
                    setTimeout(function(){
                    var content = $('.summernote').summernote('code');
                    var matches = content.match(/\bhttps?:\/\/\S+/gi);
                    if (matches) {
                        for (var i = 0; i < matches.length; i++) {
                        var replacement = '';
                        var ytMatch = matches[i].match(/(?:https?:\/\/)?(?:www\.)?(?:youtube\.com\/watch\?v=|youtu\.be\/)([\w\-]+)/);
                        var twMatch = matches[i].match(/(?:https?:\/\/)?(?:www\.)?twitter\.com\/(?:#!\/)?(\w+)\/status(es)?\/(\d+)/);
                        var imgMatch = matches[i].match(/\bhttps?:\/\/\S+\.(jpg|jpeg|png|gif)\b/);
                        

                        // If YouTube match
                        if (ytMatch && ytMatch[1].length === 11) {
                            replacement = '<iframe width="560" height="315" src="https://www.youtube.com/embed/' + ytMatch[1] + '" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
                        }
                        // If Twitter match
                        else if (twMatch && twMatch[3]) {
                            replacement = '<blockquote class="twitter-tweet"><a href="' + twMatch[i] + '"></a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"><' + '/script>';
                        }
                         // If Image URL match
                        else if (imgMatch) {
                            replacement = '<img src="' + imgMatch[i] + '" style="max-width:100%;height:auto;">';
                        }
                         


                        // Replace with embed code if a replacement was found
                        if (replacement) {
                            content = content.replace(matches[i], replacement);
                        }
                        }
                        $('.summernote').summernote('code', content);
                    }
                    }, 100);
                }
            }

        });
    });


</script>

<script>

    let table = new DataTable('#myTable');

    // document.querySelectorAll('.editorAr').forEach(element => {
    //     ClassicEditor
    //         .create(element, {
    //             language: 'ar'
    //         })

    //         .catch(error => {
    //             console.error(error);
    //         });
    // });
    // document.querySelectorAll('.editorEn').forEach(element => {
    //     ClassicEditor
    //         .create(element)

    //         .catch(error => {
    //             console.error(error);
    //         });
    // });
</script>
</body>

</html>
