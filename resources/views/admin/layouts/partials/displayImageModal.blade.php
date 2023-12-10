
 <!-- Display Image Modal  -->
 <div class="modal fade" id="displayImageModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content bg-dark">
            <div class="modal-header">
                <h5 id="displayImageModal-title" class="modal-title text-white">
                    <a id="download-image-btn" role="button" class="btn btn-success" href="" download>Download QrCode</a>
                </h5>

                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body text-white">
                <div class="row mb-3">
                    <div class="col-sm-12">
                        <p>
                            <strong id="displayImageModal-body">

                            </strong>
                        </p>
                    </div>
                </div>

                {{-- Image --}}
                <div class="col-12 col-lg-12 col-xl-12 d-flex justify-content-center">

                    <img id="image-viewer" src="">

               </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-dark" data-bs-dismiss="modal">{{ __('إغلاق') }}</button>
            </div>
        </div>
    </div>
</div>
