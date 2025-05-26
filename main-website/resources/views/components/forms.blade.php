@switch($type)
    @case('contact-short')
        <div class="row g-3">
            <div class="col-12">
                <label for="" class="form-label">Your Name</label>
                <input type="text" class="form-control" required>
            </div>
            <div class="col-12">
                <label for="" class="form-label">Your Contact Number</label>
                <input type="text" class="form-control" required>
            </div>
            <div class="col-12">
                <label for="" class="form-label">Your Email Address</label>
                <input type="text" class="form-control" required>
            </div>
            <div class="col-12">
                <label for="" class="form-label">Your Message</label>
                <textarea name="" id="" cols="30" rows="4" class="form-control"></textarea>
            </div>
            <div class="col-12">
                <div class="row">
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary btn-icon"><i
                                class="fa-solid fa-check icon-prepend"></i>Submit Query</button>
                    </div>
                    <div class="col-auto">
                        <button type="reset" class="btn btn-secondary btn-icon"><i
                                class="fa-solid fa-xmark icon-prepend"></i>Reset</button>
                    </div>
                </div>
            </div>
        </div>
    @break

    @case('event-enquiry')
        <div class="row g-3">
            <div class="col-12">
                <input type="text" class="form-control" placeholder="Your Name" required>
            </div>
            <div class="col-12">
                <input type="text" class="form-control" placeholder="Your Contact Number" required>
            </div>
            <div class="col-12">
                <input type="text" class="form-control" placeholder="Your Email Address" required>
            </div>
            <div class="col-12">
                <div class="row">
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary btn-icon"><i
                                class="fa-solid fa-check icon-prepend"></i>Submit Enquiry</button>
                    </div>
                    <div class="col-auto">
                        <button type="reset" class="btn btn-secondary btn-icon"><i
                                class="fa-solid fa-xmark icon-prepend"></i>Reset</button>
                    </div>
                </div>
            </div>
        </div>
    @break

    @default
@endswitch
