<x-layout>
    <x-slot name="title">Edit Job</x-slot>
    <div class="bg-white mx-auto p-8 rounded-lg shadow-md w-full md:max-w-3xl">
        <h2 class="text-4xl text-center font-bold mb-4">
            Edit Job Listing
        </h2>
        <form method="POST" action="{{route('jobs.update', $job->id)}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <h2 class="text-2xl font-bold mb-6 text-center text-gray-500">
                Job Info
            </h2>

            <x-inputs.text id="title" name="title" :value="old('title', $job->title)" label="Job Title"
                placeholder="Software Engineer" />

            <x-inputs.text-area id="description" name="description" :value="old('description', $job->description)"
                label="Description"
                placeholder="We are seeking a skilled and motivated Software Developer to join our growing development team..." />

            <x-inputs.text id="salary" name="salary" :value="old('salary', $job->salary)" label="Salary" type="number"
                placeholder="90000" />

            <x-inputs.text-area id="requirements" name="requirements" :value="old('requirements', $job->requirements)"
                label="Requirements" placeholder="Bachelor's degree in Computer Science" />

            <x-inputs.text-area id="benefits" name="benefits" :value="old('benefits', $job->benefits)" label="Benefits"
                placeholder="Health insurance, 401k, paid time off" />

            <x-inputs.text id="tags" name="tags" :value="old('tags', $job->tags)" label="Tags (comma-separated)"
                placeholder="development, coding, java, python" />

            <x-inputs.select id="job_type" name="job_type" :value="old('job_type', $job->job_type)" label="Job Type"
                :options="['Full-Time' => 'Full-Time', 'Part-Time' => 'Part-Time', 'Contract' => 'Contract', 'Temporary' => 'Temporary', 'Internship' => 'Internship', 'Volunteer' => 'Volunteer', 'On-Call' => 'On-Call']" />

            <x-inputs.select id="remote" name="remote" label="Remote" :value="old('remote', $job->remote)"
                :options="[0 => 'No', 1 => 'Yes']" />

            <x-inputs.text id="address" name="address" :value="old('address', $job->address)" label="Address"
                placeholder="123 Main St" />

            <x-inputs.text id="city" name="city" :value="old('city', $job->city)" label="City" placeholder="Albany" />
            <x-inputs.text id="state" name="state" :value="old('state', $job->state)" label="State" placeholder="NY" />
            <x-inputs.text id="zipcode" name="zipcode" :value="old('zipcode', $job->zipcode)" label="Zipcode"
                placeholder="12201" />

            <h2 class="text-2xl font-bold mb-6 text-center text-gray-500">
                Company Info
            </h2>

            <x-inputs.text id="company_name" name="company_name" :value="old('company_name', $job->company_name)"
                label="Company Name" placeholder="Enter Company Name" />

            <x-inputs.text-area id="company_description" name="company_description"
                :value="old('company_description', $job->company_description)" label="Company Description"
                placeholder="Company Description" />

            <x-inputs.text id="company_website" name="company_website"
                :value="old('company_website', $job->company_website)" label="Company Website" type="url"
                placeholder="Enter Company Website" />
            <x-inputs.text id="contact_phone" name="contact_phone" :value="old('contact_phone', $job->contact_phone)"
                label="Contact Phone" placeholder="Enter Contact Phone" />
            <x-inputs.text id="contact_email" name="contact_email" :value="old('contact_email', $job->contact_email)"
                label="Contact Email" type="email" placeholder="Enter Contact Email" />

            <x-inputs.file id="company_logo" name="company_logo" label="Company Logo" />

            <button type="submit"
                class="w-full bg-green-500 hover:bg-green-600 text-white px-4 py-2 my-3 rounded focus:outline-none">
                Save
            </button>
        </form>
    </div>
</x-layout>