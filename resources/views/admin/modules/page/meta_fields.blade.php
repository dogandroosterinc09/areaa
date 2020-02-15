<div class="block">
    <div class="block-title">
        <h2><i class="fa fa-archive"></i> <strong>Meta Data</strong></h2>
    </div>
    <input type="hidden" name="seo_meta_id" value="{{ (!empty($page) ? $page->seo_meta_id : 0) }}">

    @include('admin.components.input-field', ['label' => 'Meta Title', 'value' => !empty($page) && $page->seo_meta ? $page->seo_meta->meta_title : ''])
    @include('admin.components.input-field', ['label' => 'Meta Keywords', 'value' => !empty($page) && $page->seo_meta ? $page->seo_meta->meta_keywords : ''])
    @include('admin.components.textarea', ['label' => 'Meta Description', 'value' => !empty($page) && $page->seo_meta ? $page->seo_meta->meta_description : ''])
</div>