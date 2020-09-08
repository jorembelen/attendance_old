
                    @if($errors->any())
                        {!! implode('', $errors->all('<div class="alert alert-warning background-warning col-sm-4">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <i class="icofont icofont-close-line-circled text-white"></i>
                        </button>
                        <strong>:message</strong>
                        </div>')) !!}
                    @endif 