<x-layout>
    <x-page-heading>new job</x-page-heading>
    <x-forms.form method="post" action="/jobs">
        <x-forms.input name="title" placeholder="CEO" label="Title"/>
        <x-forms.input name="salary" placeholder="$90.000USD" label="Salary"/>
        <x-forms.input name="location" placeholder="CEO" label="Location"/>
        <x-forms.select label="Schedule" name="schedule">
            <option>
                Part Time
            </option>
            <option>
                Full Time
            </option>
        </x-forms.select>
        <x-forms.input name="url" placeholder="CEO" label="Url" placeholder="https://facebook.com"/>
        <x-forms.checkbox label="Feature(costs extra)" name="featured" />
        <x-forms.divider/>
        <x-forms.input label="Tags(comma separated )" name="tags" placeholder="video,education"/>
        <x-forms.button>Publish</x-forms.button>

    </x-forms.form>
</x-layout>
