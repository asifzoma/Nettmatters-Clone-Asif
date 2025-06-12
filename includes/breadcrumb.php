<?php
// Get the current page URL
$current_url = $_SERVER['REQUEST_URI'];
$path_parts = explode('/', trim($current_url, '/'));
$breadcrumb_items = [];

// Add Home as the first item
$breadcrumb_items[] = [
    'text' => 'Home',
    'url' => '/'
];

// Build the breadcrumb trail
$current_path = '';
foreach ($path_parts as $part) {
    if (empty($part)) continue;
    
    $current_path .= '/' . $part;
    // Convert hyphens to spaces and capitalize words for display
    $display_text = ucwords(str_replace(['-', '.php'], [' ', ''], $part));
    
    // Add to breadcrumb items
    $breadcrumb_items[] = [
        'text' => $display_text,
        'url' => $current_path
    ];
}
?>

<div class="breadcrumb-banner">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <?php 
                $last_index = count($breadcrumb_items) - 1;
                foreach ($breadcrumb_items as $index => $item): 
                    if ($index === $last_index):
                ?>
                    <li class="breadcrumb-item active" aria-current="page"><?php echo htmlspecialchars($item['text']); ?></li>
                <?php else: ?>
                    <li class="breadcrumb-item">
                        <a href="<?php echo htmlspecialchars($item['url']); ?>"><?php echo htmlspecialchars($item['text']); ?></a>
                    </li>
                <?php 
                    endif;
                endforeach; 
                ?>
            </ol>
        </nav>
    </div>
</div>

<style>
.breadcrumb-banner {
    background-color: #f8f9fa;
    padding: 0.75rem 0;
    border-bottom: 1px solid #e9ecef;
}

.breadcrumb {
    margin-bottom: 0;
    padding: 0;
    background-color: transparent;
    display: flex;
    flex-wrap: wrap;
    list-style: none;
}

.breadcrumb-item {
    display: flex;
    align-items: center;
    color: #6c757d;
    font-size: 0.875rem;
}

.breadcrumb-item:first-child {
    font-weight: bold;
    color: #000;
}

.breadcrumb-item + .breadcrumb-item {
    padding-left: 0.5rem;
}

.breadcrumb-item + .breadcrumb-item::before {
    display: inline-block;
    padding-right: 0.5rem;
    color: #000;
    content: "/";
    font-weight: bold;
}

.breadcrumb-item a {
    color: inherit;
    text-decoration: none;
}

.breadcrumb-item a:hover {
    text-decoration: underline;
}

.breadcrumb-item.active {
    color: #6c757d;
}
</style> 