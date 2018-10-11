<section class="section section--header $VariantClasses" id="$Anchor">
    <section class="section_content">
        <div class="section_items">
            <div class="section_desktop_header">
                <div class="section_text">
                    <% if $ShowTitle %>
                        <h1>$Title</h1>
                    <% end_if %>
                </div>
                <% if $Image %>
                <div class="section_img"
                     style="background-image:url('$Image.Fill(1400,400)')">
                </div>
                <% end_if %>
            </div>
        </div>
    </section>
</section>
