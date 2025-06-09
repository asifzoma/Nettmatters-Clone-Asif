<?php
// Define navigation items with their submenus
$nav_items = [
    'software' => [
        'icon' => 'fa-desktop',
        'small' => 'Bespoke',
        'title' => 'Software',
        'submenu' => [
            'title' => 'Our Bespoke Software Services',
            'items' => [
                ['icon' => 'fa-desktop', 'text' => 'Bespoke CRM'],
                ['icon' => 'fa-desktop', 'text' => 'Business Automation'],
                ['icon' => 'fa-desktop', 'text' => 'Software Integrations'],
                ['icon' => 'fa-desktop', 'text' => 'Mobile App Development'],
                ['icon' => 'fa-desktop', 'text' => 'Bespoke Databases'],
                ['icon' => 'fa-desktop', 'text' => 'Sharepoint Development'],
                ['icon' => 'fa-desktop', 'text' => 'Operational Systems'],
                ['icon' => 'fa-desktop', 'text' => 'Business Central Implementation'],
                ['icon' => 'fa-desktop', 'text' => 'Internet of Things (IoT) Software'],
                ['icon' => 'fa-desktop', 'text' => 'Intranet Development'],
                ['icon' => 'fa-desktop', 'text' => 'Customer Portal Development'],
                ['icon' => 'fa-desktop', 'text' => 'Reporting Hub'],
                ['icon' => 'fa-desktop', 'text' => 'SAP S/4HANA Management']
            ]
        ]
    ],
    'it-support' => [
        'icon' => 'fa-display',
        'small' => 'IT',
        'title' => 'Support',
        'submenu' => [
            'title' => 'Our IT Support Service',
            'items' => [
                ['icon' => 'fa-display', 'text' => 'Managed IT Support'],
                ['icon' => 'fa-display', 'text' => 'Business IT Support'],
                ['icon' => 'fa-display', 'text' => 'Office 365 for Business'],
                ['icon' => 'fa-display', 'text' => 'IT Consultancy'],
                ['icon' => 'fa-display', 'text' => 'Cloud Service Provider'],
                ['icon' => 'fa-display', 'text' => 'Data Backup & Disaster Recovery']
            ]
        ]
    ],
    'digital-marketing' => [
        'icon' => 'fa-chart-simple',
        'small' => 'Digital',
        'title' => 'Marketing',
        'submenu' => [
            'title' => 'Our Digital Marketing Services',
            'items' => [
                ['icon' => 'fa-chart-simple', 'text' => 'Search Engine Optimisation (SEO)'],
                ['icon' => 'fa-chart-simple', 'text' => 'Pay Per Click Advertising (PPC)'],
                ['icon' => 'fa-chart-simple', 'text' => 'Conversion Rate Optimisation (CRO)'],
                ['icon' => 'fa-chart-simple', 'text' => 'Email Marketing'],
                ['icon' => 'fa-chart-simple', 'text' => 'Social Media Marketing'],
                ['icon' => 'fa-chart-simple', 'text' => 'Content Marketing']
            ]
        ]
    ],
    'telecoms' => [
        'icon' => 'fa-phone',
        'small' => 'Telecoms',
        'title' => 'Services',
        'submenu' => [
            'title' => 'Our Telecoms Services',
            'items' => [
                ['icon' => 'fa-phone', 'text' => 'Business Mobile'],
                ['icon' => 'fa-phone', 'text' => 'Hosted VoIP Provider'],
                ['icon' => 'fa-phone', 'text' => 'Business VoIP Systems'],
                ['icon' => 'fa-phone', 'text' => 'Business Broadband'],
                ['icon' => 'fa-phone', 'text' => 'Leased Lines Provider'],
                ['icon' => 'fa-phone', 'text' => '3CX Systems']
            ]
        ]
    ],
    'web-design' => [
        'icon' => 'fa-code',
        'small' => 'Web',
        'title' => 'Design',
        'submenu' => [
            'title' => 'Our Web Design Services',
            'items' => [
                ['icon' => 'fa-code', 'text' => 'Bespoke Website Design'],
                ['icon' => 'fa-code', 'text' => 'eCommerce Website Design'],
                ['icon' => 'fa-code', 'text' => 'Pay Monthly Websites'],
                ['icon' => 'fa-code', 'text' => 'Branding & Design'],
                ['icon' => 'fa-code', 'text' => 'Mobile App Development'],
                ['icon' => 'fa-code', 'text' => 'Web Hosting']
            ]
        ]
    ],
    'cyber-security' => [
        'icon' => 'fa-shield-halved',
        'small' => 'Cyber',
        'title' => 'Security',
        'submenu' => [
            'title' => 'Our Cyber Security Services',
            'items' => [
                ['icon' => 'fa-shield-halved', 'text' => 'Cyber Security Assessment'],
                ['icon' => 'fa-shield-halved', 'text' => 'Cyber Security Training'],
                ['icon' => 'fa-shield-halved', 'text' => 'Cyber Security Services'],
                ['icon' => 'fa-shield-halved', 'text' => 'Cyber Essentials'],
                ['icon' => 'fa-shield-halved', 'text' => 'PCI Compliance'],
                ['icon' => 'fa-shield-halved', 'text' => 'GDPR Compliance']
            ]
        ]
    ],
    'developer-training' => [
        'icon' => 'fa-graduation-cap',
        'small' => 'Developer',
        'title' => 'Training',
        'submenu' => [
            'title' => 'Our Developer Training',
            'items' => [
                ['icon' => 'fa-graduation-cap', 'text' => 'Web Developer Training'],
                ['icon' => 'fa-graduation-cap', 'text' => 'Software Developer Training'],
                ['icon' => 'fa-graduation-cap', 'text' => 'Mobile Developer Training'],
                ['icon' => 'fa-graduation-cap', 'text' => 'Database Developer Training'],
                ['icon' => 'fa-graduation-cap', 'text' => 'Cloud Developer Training'],
                ['icon' => 'fa-graduation-cap', 'text' => 'DevOps Training']
            ]
        ]
    ]
];
?>

<div class="drop-down-menu-main-nav-container">
    <div class="container">
        <div class="drop-down-menu-row">
            <?php foreach ($nav_items as $key => $item): ?>
            <div class="main-nav main-nav-ddm-<?php echo array_search($key, array_keys($nav_items)) + 1; ?>">
                <div href="#" class="main-nav-ddm ddm-<?php echo $key; ?>">
                    <i class="fa-solid <?php echo $item['icon']; ?> icon-<?php echo $key; ?>-ddm"></i>
                    <small><?php echo $item['small']; ?></small>
                    <?php echo $item['title']; ?>
                    <div class="sub-menu-container">
                        <span class="triangle triangle-<?php echo array_search($key, array_keys($nav_items)) + 1; ?>"></span>
                        <ul class="container sub-menu">
                            <li class="sub-menu-title"><?php echo $item['submenu']['title']; ?></li>
                            <?php foreach ($item['submenu']['items'] as $subitem): ?>
                            <li>
                                <i class="fa-solid <?php echo $subitem['icon']; ?>"></i>
                                <a href="#" class="sub-menu-a-underline"><?php echo $subitem['text']; ?></a>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div> 