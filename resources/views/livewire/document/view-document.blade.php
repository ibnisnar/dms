<x-slot name="header">
    <x-document-header :docid="$selectedDocument->id" :links="$selectedDocument->getHeaderLinks()"/>
</x-slot>

<div class="py-10">
    <div class="sm:px-6 lg:px-8">
        <x-folder-breadcrumb :parents="$selectedDocument->folder->parents()"/>
    </div>
</div>