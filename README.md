# DNS Spoofing & Credential Harvesting Lab

This project demonstrates a **DNS Spoofing attack** combined with **ARP poisoning** to redirect a victim to a fake banking site and harvest login credentials. The lab was conducted in a controlled environment using Kali Linux on VirtualBox.

## Lab Setup

- **Host**: Kali Linux (Attacker)
- **Victim**: Another Kali Linux VM
- **Network**: Bridged Adapter (same subnet)
- **Spoofed Domain**: `fakebank.com`
- **Spoofed IP**: `192.168.1.4` (attacker)
- **Tools Used**:
  - `ettercap` for ARP poisoning
  - `dnsspoof` for DNS spoofing
  - Apache2 web server with a fake login page

---

## 📷 Screenshots

### 1. Victim resolves `fakebank.com` to attacker IP
![02_fakebank_ping.png](screenshots/02_fakebank_ping.png)

---

### 2. DNS queries spoofed with `dnsspoof`
![03_dnsspoof_spoofed_queries.png](screenshots/03_dnsspoof_spoofed_queries.png)

---

### 3. ARP poisoning initiated with `ettercap`
![04_ettercap_arp_poisoning.png](screenshots/04_ettercap_arp_poisoning.png)

---

### 4. Victim lands on fake login page
![05_fakebank_login_page.png](screenshots/05_fakebank_login_page.png)

---

### 5. Redirects to Facebook after login submission
![06_facebook_redirect.png](screenshots/06_facebook_redirect.png)

---

### 6. Attacker reads captured credentials
![07_stolen_credentials_view.png](screenshots/07_stolen_credentials_view.png)
[view in the screenshots folder if not viewable]

---

## Captured Credentials (creds.txt)
```
Username: olina
Password: heheh1212
```

---

## Disclaimer

This project is intended for **educational purposes only**. Performing these techniques on unauthorized systems is illegal and unethical.

---

## Status

✔️ Project Completed  
📁 Folder: `dns-spoofing-lab`  
