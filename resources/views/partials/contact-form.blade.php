<form action="/send-mail" method="post"
      autocomplete="off"
      class="wpcf7-form init wpcf7-acceptance-as-validation"
      aria-label="Contact form" novalidate="novalidate"
      >
    @csrf
    <div
        class="qodef-main-cf7 qodef-grid qodef-layout--template">
        <div class="qodef-grid-inner">
<div class="qodef-grid-item qodef-col--12">
    <span class="wpcf7-form-control-wrap"
          data-name="your-name">
        <input size="40"
               aria-required="true"
               aria-invalid="false"
               placeholder="@lang('site.contact-name')"
               value=""
               type="text"
               name="name"/></span>
</div>
<div class="qodef-grid-item qodef-col--12">
    <span class="wpcf7-form-control-wrap"
          data-name="your-email">
        <input
            size="40"
            aria-required="true"
            aria-invalid="false"
            placeholder="@lang('site.contact-email')" value=""
            type="email"
            name="email"/>
    </span>
</div>
<div class="qodef-grid-item qodef-col--12">
    <span class="wpcf7-form-control-wrap"
          data-name="your-phone">
        <input
            size="40"
            aria-required="true"
            aria-invalid="false"
            placeholder="@lang('site.contact-phone')" value=""
            type="text"
            name="phone"/></span>
</div>
<div class="qodef-grid-item qodef-col--12">
    <span class="wpcf7-form-control-wrap"
          data-name="your-message">
        <textarea
            cols="40" rows="10"
            class="wpcf7-form-control wpcf7-textarea"
            aria-invalid="false"
            placeholder="@lang('site.contact-message')"
            name="message"></textarea>
    </span>
</div>
<div
    class="qodef-grid-item qodef-col--12 checku">
    <span class="wpcf7-form-control-wrap"
          data-name="accept1"><span
            class="wpcf7-form-control wpcf7-acceptance"><span
                class="wpcf7-list-item"><label>
                    <input
                        type="checkbox"
                        name="accept1" value="1"
                        aria-invalid="false"/>
                    <span
                        class="wpcf7-list-item-label">
                        @lang('site.contact-terms')
                    </span>
                </label>
            </span>
        </span>
    </span>
</div>
<div class="qodef-grid-item qodef-col--12 checku">
    <span class="wpcf7-form-control-wrap"
          data-name="accept2">
        <span
            class="wpcf7-form-control wpcf7-acceptance">
            <span class="wpcf7-list-item">
                <label>
                    <input
                        type="checkbox"
                        name="accept2" value="1"
                        aria-invalid="false"/>
                    <span
                        class="wpcf7-list-item-label">
                        @lang('site.contact-c-email')
                    </span>
                </label>
            </span>
        </span>
    </span>
</div>
            <div class="qodef-grid-item qodef-col--12">
                <button
                    class="qodef-button qodef-size--normal qodef-type--filled qodef-m"
                    type="submit">
                    <span class="qodef-m-text">
                        @lang('site.nav-contact')
                    </span>
                </button>
            </div>
        </div>
    </div>
</form>
