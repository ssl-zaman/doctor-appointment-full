import { useState, useEffect } from "react";

export default function FlashMessage({ message }) {
    const [visible, setVisible] = useState(true);

    useEffect(() => {
        const timer = setTimeout(() => {
            setVisible(false);
        }, 5000); // 10 seconds (10000ms)

        return () => clearTimeout(timer); // Cleanup on unmount
    }, []);

    const handleClose = () => {
        setVisible(false);
    };

    return (
        visible && (
            <div className="bg-green-500 text-white p-4 rounded-md mb-5">
                <div className="flex justify-between">
                    <span>{message}</span>
                    <button onClick={handleClose} className="ml-4 text-white">
                        &times; {/* Close icon */}
                    </button>
                </div>
            </div>
        )
    );
}
