Welcome to Project Noah!

SUMMARY: Home automation system that reduces reliance on external cloud services and allows user-specific experiences that can be shared amongst different homes.

BACKGROUND: Open source home automation has taken the important first step to allow users/developers to create a "Big Cloud" experience within their homes/locales, giving them the control over what data they collect, how they collect it, and where it goes, if it goes anywhere. So far, these automation solutions are one-locale-centric. Meaning, if they want to connect to other people, they have to reach out to other services. So, Project Noah sets out to create an intermediary connection and sharing scheme that eliminates/minimizes this reaching out and allows direct communication and sharing between locales.

ARCHITECTURE: This concept would extend edge computing from the perspective of Big Data, employing hubs that would manage local sensors and other automation and computing. All internet access and data movement would be managed by this hub. To boost home computing, users could own several hubs, each of which would share computing resources. All IoT and personal computing devices (such as PCs, laptops, tablets, phones, etc) would register to this system and interact with any and all access points in the house. Any data exiting the house to an external service (such as social media or cloud service) would be controllable; account owners would be able to add, modify, or remove data flows as desired. Sub-hubs would be microcontrollers with persistent data storage, able to temporarily store application states in the instance of high bandwidth usage or network slowdowns and outages. If user devices install appropriate companion software and enable shared computing, their device(s) could effectively become part of the cloud computing by accepting computing tasks as needed by the home system.

Additionally, users with the Noah app installed on their mobile device or in their vehicle may designate certain data to be carried on-the-go, to be shareable with other Noah devices. In concept, User A can sync their mobile device with their hub to download data they wish to take with them. Upon arriving at User B's location, User A can easily share data with User B. Alternately, User A can assign a role to User B on User A's phone. Once User A returns home, their device will sync with the hub with the updated role/permissions. When User B arrives at User A's home, User B will be able to employ whatever permissions User A assigned, such as not needing to knock/ring the doorbell before entry, access to certain rooms or appliances, ability to see certain data, etc. User A can modify or revoke those privileges at any time, and User B will immediately be limited or extended accordingly.

Authentication via Oauth will be required with every transaction

HIERARCHY: Devices => Sub-hubs => Slave Hubs => Local Master Hub => Departure/Cut-off Point => Big Data

HARDWARE: Raspberry Pi 4B (4GB) with 64GB SD card, Arduino-based IoT devices, home router

SOFTWARE: Apache 2, PHP, Python, MySQL

LIBRARIES: 
- JavaScript: React, jQuery
- REST API: Okta

DEVELOPMENT PHASES:

Phase 1: Establish REST and Oauth process, then local web page. Success indicated by successful REST requests and OAuth operation with proper display on the web page.

Phase 2: Establish item/user registration. This can be IoT devices/sensors, mobile devices, etc. Success indicated by successful registration of at least one device and one user.

Phase 3: Establish hub management console within the webpage for users and devices. Success indicated by display of all registered devices and users, regardless of connection status, as well as successful correct behavior changes when permissions/roles are updated.

Phase 4: Create test devices for the automation to test registration, authentication, and data transmission. Success indicated by successful registration, authentication, data transmission, and required behaviors based on the data.

Phase 5: Establish file/cloud service. Success indicated by successful upload, display, download, and modification/deletion of the file through the console.

Phase 6: Establish voice control service. Success indicated by successful command implementation.

Phase 7: Establish Wi-Fi access point with ability to allow or block access to all or custom list of websites/services based either on one user or all users. Success indicated by successful connection of a device to the internet, successful white list creation and use, successful blacklist creation and use, both for all and for at least one user, and successful blocking and unblocking of at least one device.

Phase 8: Establish social media service. Social media service will manage all Wi-Fi-connection interactions with social media, if/as desired. Success indicated by successful interaction with a social media provider with no restrictions, addition of at least two restrictions, and blockage/unblockage of social media interaction.

Phase 9: Establish external cloud service. Users will be allowed to use external cloud services as they choose. Success indicated by successful connection to a cloud service, successful upload to the service, and successful blocking/unblocking of that connection.

Phase 10: Create Noah website with initial user/hub registration. Default requirement will be to register the owning user connected to the hub. The site will register two IDs; a site ID and a User ID. User ID will be the hub ID with unique additional characters added on. This will eliminate subordinate users that may not be registered with the site having IDs redundant to other users. If a user currently registered as subordinate to a hub registers themself to a new hub, their ID will change to reflect the new hub. The site ID will be unchanging and fully unique to each site-registered user. This ID is used in the management of customers only and will not be used in hub/social communications. Success indicated by user/hub registration.

Phase 11: Establish further functionality in Noah site. The Noah site will use Oauth for all communications. Beyond account and system status information, the hub owner will be able to assign permissions to the Noah site to restrict access to all other data. This will effectively render the Noah as another user, rather than the other way around. This ensures permissions extend from the user, not from the site. It is practically easier to share data and make changes to the hub remotely through the use of a third party, but it is understood that all users may not want that exposure in favor of more private and secure means. Success indicated by successful hub interaction from site console, correct site behavior based on local permissions setting, both when display by account owner and by non-account owners (the public).

Phase 12: Create phone apps to reflect all functionality. Success indicated by correct behaviors of the hub and the Noah site based on all options/functions in the app.

Phase 13: Establish Noah site cloud service. This will be used as most efficient means of cloud service fully integrating all capabilities of the Noah service. Success indicated by successful upload of files, management of files through the console, and download of files.

Phase 14: Create second hub and establish master-slave relationship. Multiple hubs under the same account should recognize one as the central service and the others as "helpers", with the ability for any to succeed as central service if the primary is unable. Assigning a room or function type to a hub will result in apps/functions with that function/room tag being more easily available and higher priority in computing resources for that hub. Hubs will share computing resources to reduce strain on each device. Computing devices, such as cell phones, tablets, laptops, and desktops, that have the app installed will be dubbed as limited slave devices, able to carry out certain computing tasks as needed. Each hub will maintain a list of available computing devices, to include IP address, MAC address, connection speed, etc, to be able to task accordingly. Success indicated by successful hub registration on at least one hub and at least one limited hub device, successful task reciept and execution, and correct behaviors of the device based on the role given.

Phase 15: Invite at least one other user to test a hub as their own. Success indicated by successful registration on the site, correct behaviors at the test location, and appropriate viewing and interaction between accounts on the Noah site. If possible, also successful permissions grant and use by each account owner at the other owners' hubs.

Phase 16: Review all documentation and test processes in accordance with previous phases. Test connections and behaviors with internet connected and connections to external providers, with and without permissions granted. Test local functionality with internet disconnected. Move hub to alternate location (such as a field) and test functionality.

Phase 17: Limited release. Success indicated by appropriate site/device behaviors across limited wider user audience.

Phase 18: Review status and documentation. Make any adjustments/fixes.

Phase 19: General release to public.



