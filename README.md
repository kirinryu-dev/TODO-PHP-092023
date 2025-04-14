Project Map 

/TODO-LIST-PHP
│
├── /assets
│   ├── /css
│   │    └── style.css         # Layout and component styling
│   ├── /js
│   │    └── script.js         # Optional interactivity (e.g., instant "mark as done")
│   └── /images
│        └── logo.png          # Branding or design assets
│
├── /includes
│   ├── header.php             # Head section + opening body
│   ├── footer.php             # Footer + closing body
│   └── navbar.php             # Filters: All / Completed / Pending
│
├── /config
│   └── config.php             # Database connection settings or file paths
│
├── /php
│   ├── taskManager.php        # Class to handle Task actions (add, edit, delete, list)
│   ├── traitement.php         # Handles incoming form requests, uses taskManager
│   └── helpers.php            # Helper functions (e.g., sanitize inputs)
│
├── index.php                   # Main UI for tasks
└── README.md                   # Documentation

