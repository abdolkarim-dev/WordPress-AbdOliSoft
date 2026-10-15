<?php
/**
 * ============================================
 * Custom Meta Boxes for Project Posts
 * ============================================
 */

add_action('add_meta_boxes', 'abdolisoft_register_project_meta_box');
function abdolisoft_register_project_meta_box() {
    add_meta_box(
        'abdolisoft_project_details',
        'Project Details',
        'abdolisoft_project_meta_box_callback',
        'post',
        'side',
        'high'
    );
}

function abdolisoft_project_meta_box_callback($post) {
    wp_nonce_field('abdolisoft_project_meta_save', 'abdolisoft_project_meta_nonce');

    $client       = get_post_meta($post->ID, '_project_client', true);
    $year         = get_post_meta($post->ID, '_project_year', true);
    $live_url     = get_post_meta($post->ID, '_project_live_url', true);
    $source_url   = get_post_meta($post->ID, '_project_source_url', true);
    $hero_number  = get_post_meta($post->ID, '_project_hero_number', true);

    // تکنولوژی‌ها به صورت آرایه
    $technologies = get_post_meta($post->ID, '_project_technologies', true);
    if (!is_array($technologies)) {
        // سازگاری با داده‌های قدیمی که کاما-جدا بودن
        $technologies = $technologies
            ? array_map('trim', explode(',', $technologies))
            : [];
    }
    ?>
    
    <style>
        .abdolisoft-meta-field {
            margin-bottom: 14px;
        }
        .abdolisoft-meta-field > label {
            display: block;
            font-weight: 600;
            font-size: 12px;
            margin-bottom: 5px;
            color: #1e1e1e;
        }
        .abdolisoft-meta-field input[type="text"],
        .abdolisoft-meta-field input[type="url"] {
            width: 100%;
            padding: 8px 10px;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 13px;
        }
        .abdolisoft-meta-field input:focus {
            border-color: #10b981;
            outline: none;
            box-shadow: 0 0 0 1px #10b981;
        }
        .abdolisoft-meta-field .description {
            font-size: 11px;
            color: #888;
            margin-top: 4px;
            font-style: italic;
        }
        .abdolisoft-meta-divider {
            height: 1px;
            background: #eee;
            margin: 16px 0;
        }

        /* ===== Technologies Tags ===== */
        .tech-tags-wrapper {
            display: flex;
            flex-wrap: wrap;
            gap: 6px;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 6px;
            background: #fafafa;
            min-height: 42px;
            align-items: center;
        }
        .tech-tags-wrapper:focus-within {
            border-color: #10b981;
            box-shadow: 0 0 0 1px #10b981;
            background: #fff;
        }
        .tech-tag {
            display: inline-flex;
            align-items: center;
            gap: 4px;
            padding: 3px 8px;
            background: #10b981;
            color: #fff;
            border-radius: 4px;
            font-size: 11px;
            font-weight: 500;
            line-height: 1.4;
            animation: tagFadeIn 0.2s ease;
        }
        @keyframes tagFadeIn {
            from { opacity: 0; transform: scale(0.85); }
            to   { opacity: 1; transform: scale(1); }
        }
        .tech-tag .remove-tag {
            background: rgba(255,255,255,0.25);
            border: none;
            color: #fff;
            cursor: pointer;
            width: 14px;
            height: 14px;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 10px;
            line-height: 1;
            padding: 0;
            margin-left: 2px;
            transition: background 0.15s;
        }
        .tech-tag .remove-tag:hover {
            background: rgba(255,255,255,0.45);
        }
        .tech-input {
            flex: 1;
            min-width: 90px;
            border: none !important;
            outline: none !important;
            background: transparent !important;
            padding: 3px 4px !important;
            font-size: 12px !important;
            box-shadow: none !important;
            width: auto !important;
        }
        .tech-add-btn {
            margin-top: 8px;
            display: inline-flex;
            align-items: center;
            gap: 4px;
            padding: 5px 12px;
            background: #10b981;
            color: #fff;
            border: none;
            border-radius: 6px;
            font-size: 12px;
            font-weight: 500;
            cursor: pointer;
            transition: background 0.15s;
        }
        .tech-add-btn:hover {
            background: #059669;
        }
        .tech-suggestions {
            display: flex;
            flex-wrap: wrap;
            gap: 4px;
            margin-top: 8px;
        }
        .tech-suggestion {
            padding: 3px 8px;
            background: #f0f0f0;
            color: #555;
            border: 1px solid #e0e0e0;
            border-radius: 4px;
            font-size: 10px;
            cursor: pointer;
            transition: all 0.15s;
        }
        .tech-suggestion:hover {
            background: #10b981;
            color: #fff;
            border-color: #10b981;
        }
    </style>

    <div class="abdolisoft-meta-field">
        <label for="project_client">Client</label>
        <input type="text" id="project_client" name="project_client" 
               value="<?php echo esc_attr($client); ?>" placeholder="e.g. Acme Corp" />
    </div>

    <div class="abdolisoft-meta-field">
        <label for="project_year">Year</label>
        <input type="text" id="project_year" name="project_year" 
               value="<?php echo esc_attr($year); ?>" placeholder="e.g. 2026" />
    </div>

    <!-- ===== Technologies (Tag Input) ===== -->
    <div class="abdolisoft-meta-field">
        <label>Technologies</label>
        
        <div class="tech-tags-wrapper" id="tech-tags-wrapper">
            <?php foreach ($technologies as $tech): ?>
                <?php if (trim($tech) !== ''): ?>
                    <span class="tech-tag" data-value="<?php echo esc_attr($tech); ?>">
                        <?php echo esc_html($tech); ?>
                        <button type="button" class="remove-tag" aria-label="Remove">✕</button>
                    </span>
                <?php endif; ?>
            <?php endforeach; ?>
            <input type="text" 
                   class="tech-input" 
                   id="tech-input" 
                   placeholder="Add technology..." />
        </div>

        <input type="hidden" 
               name="project_technologies" 
               id="project_technologies_hidden" 
               value="<?php echo esc_attr(implode('|', array_filter(array_map('trim', $technologies)))); ?>" />

        <button type="button" class="tech-add-btn" id="tech-add-btn">
            + Add
        </button>

        <div class="tech-suggestions">
            <?php
            $suggestions = ['React', 'Vue', 'Next.js', 'TypeScript', 'Tailwind', 'Node.js', 'Laravel', 'Python', 'WordPress'];
            foreach ($suggestions as $s): ?>
                <span class="tech-suggestion" data-value="<?php echo esc_attr($s); ?>">
                    <?php echo esc_html($s); ?>
                </span>
            <?php endforeach; ?>
        </div>
    </div>

    <div class="abdolisoft-meta-divider"></div>

    <div class="abdolisoft-meta-field">
        <label for="project_live_url">Live Demo URL</label>
        <input type="url" id="project_live_url" name="project_live_url" 
               value="<?php echo esc_attr($live_url); ?>" placeholder="https://..." />
    </div>

    <div class="abdolisoft-meta-field">
        <label for="project_source_url">Source Code URL</label>
        <input type="url" id="project_source_url" name="project_source_url" 
               value="<?php echo esc_attr($source_url); ?>" placeholder="https://github.com/..." />
    </div>

    <div class="abdolisoft-meta-field">
        <label for="project_hero_number">Hero Number</label>
        <input type="text" id="project_hero_number" name="project_hero_number" 
               value="<?php echo esc_attr($hero_number); ?>" placeholder="01" maxlength="4" />
    </div>

    <!-- ===== JavaScript برای Tag Input ===== -->
    <script>
    (function() {
        const wrapper   = document.getElementById('tech-tags-wrapper');
        const input     = document.getElementById('tech-input');
        const hidden    = document.getElementById('project_technologies_hidden');
        const addBtn    = document.getElementById('tech-add-btn');
        const suggestions = document.querySelectorAll('.tech-suggestion');

        function getTags() {
            return Array.from(wrapper.querySelectorAll('.tech-tag'))
                .map(t => t.dataset.value);
        }

        function syncHidden() {
            hidden.value = getTags().join('|');
        }

        function createTag(value) {
            value = value.trim();
            if (!value) return false;

            // جلوگیری از تکراری
            if (getTags().some(t => t.toLowerCase() === value.toLowerCase())) {
                return false;
            }

            const tag = document.createElement('span');
            tag.className = 'tech-tag';
            tag.dataset.value = value;
            tag.innerHTML = `${value} <button type="button" class="remove-tag">✕</button>`;

            wrapper.insertBefore(tag, input);
            syncHidden();
            return true;
        }

        function addFromInput() {
            const value = input.value.trim();
            if (createTag(value)) {
                input.value = '';
            }
            input.focus();
        }

        // دکمه Add
        addBtn.addEventListener('click', addFromInput);

        // Enter در input
        input.addEventListener('keydown', function(e) {
            if (e.key === 'Enter' || e.key === ',') {
                e.preventDefault();
                addFromInput();
            }
            // Backspace روی input خالی = حذف آخرین تگ
            if (e.key === 'Backspace' && input.value === '') {
                const tags = wrapper.querySelectorAll('.tech-tag');
                if (tags.length) {
                    tags[tags.length - 1].remove();
                    syncHidden();
                }
            }
        });

        // حذف تگ
        wrapper.addEventListener('click', function(e) {
            if (e.target.classList.contains('remove-tag')) {
                e.target.closest('.tech-tag').remove();
                syncHidden();
            }
        });

        // پیشنهادها
        suggestions.forEach(s => {
            s.addEventListener('click', function() {
                createTag(this.dataset.value);
            });
        });

        // کلیک روی wrapper = focus روی input
        wrapper.addEventListener('click', function(e) {
            if (e.target === wrapper) input.focus();
        });
    })();
    </script>

    <?php
}

// ذخیره‌سازی
add_action('save_post', 'abdolisoft_save_project_meta');
function abdolisoft_save_project_meta($post_id) {
    if (!isset($_POST['abdolisoft_project_meta_nonce']) ||
        !wp_verify_nonce($_POST['abdolisoft_project_meta_nonce'], 'abdolisoft_project_meta_save')) {
        return;
    }

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
    if (!current_user_can('edit_post', $post_id)) return;

    // فیلدهای ساده
    $simple_fields = [
        'project_client'      => '_project_client',
        'project_year'        => '_project_year',
        'project_hero_number' => '_project_hero_number',
    ];

    foreach ($simple_fields as $field_key => $meta_key) {
        if (isset($_POST[$field_key])) {
            $value = sanitize_text_field($_POST[$field_key]);
            $value ? update_post_meta($post_id, $meta_key, $value)
                   : delete_post_meta($post_id, $meta_key);
        }
    }

    // URLها
    $url_fields = [
        'project_live_url'   => '_project_live_url',
        'project_source_url' => '_project_source_url',
    ];

    foreach ($url_fields as $field_key => $meta_key) {
        if (isset($_POST[$field_key])) {
            $value = esc_url_raw($_POST[$field_key]);
            $value ? update_post_meta($post_id, $meta_key, $value)
                   : delete_post_meta($post_id, $meta_key);
        }
    }

    // تکنولوژی‌ها (آرایه)
    if (isset($_POST['project_technologies'])) {
        $raw = sanitize_text_field($_POST['project_technologies']);
        $techs = array_filter(array_map('trim', explode('|', $raw)));

        if (!empty($techs)) {
            update_post_meta($post_id, '_project_technologies', $techs);
        } else {
            delete_post_meta($post_id, '_project_technologies');
        }
    }
}