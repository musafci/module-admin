@extends('admin.app')

@section('content')
    <!-- Container fluid -->
    <div class="bg-transparent pt-10 pb-21"></div>
    <div class="container-fluid mt-n22 px-6">

        <div class="row">
            <div class="col-md-12 col-12">
                <!-- card  -->
                <div class="card">
                    <!-- card header  -->
                    <div class="card-header bg-white border-bottom-0 py-4" style="border-bottom: 1px solid #eee !important;">
                        <h4 class="mb-0">Add New Customer</h4>
                    </div>
                    <!-- Tab content -->
                    <div class="tab-content p-4" id="pills-tabContent-basic-forms">
                       <div class="tab-pane tab-example-design fade show active" id="pills-basic-forms-design" role="tabpanel" aria-labelledby="pills-basic-forms-design-tab">
                          <form>
                             <!-- Input -->
                             <div class="mb-3">
                                <label class="form-label" for="textInput">Text</label>
                                <input type="text" id="textInput" class="form-control" placeholder="Input Text">
                             </div>
                             <!-- Password -->
                             <div class="mb-3">
                                <label class="form-label" for="passwordInput">Password</label>
                                <input type="password" id="passwordInput" class="form-control" value="********">
                             </div>
                             <!-- Helper Text -->
                             <div class="mb-3">
                                <label class="form-label">Helper text</label>
                                <input type="password" class="form-control" value="**********">
                                <span class="text-muted ">Your password must be 8-20
                                characters long, contain letters and numbers, and must not
                                contain spaces, special characters, or emoji.</span>
                             </div>
                             <!-- Email -->
                             <div class="mb-3">
                                <label class="form-label" for="emailInput">Email</label>
                                <input type="email" id="emailInput" class="form-control" placeholder="name@example.com">
                             </div>
                             <!-- Select Option -->
                             <div class="mb-3">
                                <label class="form-label" for="selectOne">Select <span
                                   class="text-secondary">(Optional)</span></label>
                                <select id="selectOne" class="form-select">
                                   <option>Choose an option</option>
                                   <option>1</option>
                                   <option>2</option>
                                   <option>3</option>
                                   <option>4</option>
                                </select>
                             </div>
                             <!-- Mulitple Select Option -->
                             <div class="mb-3">
                                <label class="form-label" for="selectTwo">Multiple
                                select</label>
                                <select id="selectTwo" class="form-select" size="3" multiple="">
                                   <option>1</option>
                                   <option>2</option>
                                   <option>3</option>
                                   <option>4</option>
                                   <option>5</option>
                                </select>
                             </div>
                             <!-- Text Area -->
                             <div class="mb-3">
                                <label class="form-label" for="textareaInput">Textarea</label>
                                <textarea id="textareaInput" class="form-control" placeholder="Textarea field" rows="4"></textarea>
                             </div>
                          </form>
                       </div>                       
                    </div>
                 </div>
            </div>

            <div class="col-12 py-5">
                <button type="button" class="btn btn-primary">Save</button>
            </div>
        </div>

    </div>
@endsection
