Welcome to Project Noah!

SUMMARY: Home automation system that changes the focus on Big Cloud to maximizing home/edge computing to carry out many tasks that really shouldn't rely on an internet connection or connection to paid cloud service.

BACKGROUND: With the growth of IoT and cloud computing, reliance on internet connectivity is growing more and more. Do we know where and how and why our data is being used? How can people leverage IoT benefits, yet maintain control of their data? And not just control, but smart home autonomy. What if you could take a personal cloud and home automation functionality on the road? While there is indeed significant gains to be had with connections to Big Data, those connections shouldn't be the lynchpin. Households, businesses, and other organizations should be able to continue local operations in the event of internet or power (grid) outages.

ARCHITECTURE: This concept would extend edge computing from the perspective of Big Data, employing hubs that would manage local sensors and other automation and computing. All internet access and data movement would be managed by this hub. To boost home computing, users could own several hubs, each of which would share computing resources. All IoT and personal computing devices (such as PCs, laptops, tablets, phones, etc) would register to this system and interact with any and all access points in the house. Any data exiting the house to an external service (such as social media or cloud service) would be controllable; account owners would be able to add, modify, or remove data flows as desired. Sub-hubs would be microcontrollers with persistent data storage, able to temporarily store application states in the instance of high bandwidth usage or network slowdowns and outages. If user devices install appropriate companion software and enable shared computing, their device(s) could effectively become part of the cloud computing by accepting computing tasks as needed by the home system.

HIERARCHY: Devices => Sub-hubs => Slave Hubs => Local Master Hub => Departure/Cut-off Point => Big Data

HARDWARE: Raspberry Pi 4B (4GB) with 64GB SD card, Arduino-based IoT devices, home router

SOFTWARE: Apache 2, PHP, Python, MySQL


