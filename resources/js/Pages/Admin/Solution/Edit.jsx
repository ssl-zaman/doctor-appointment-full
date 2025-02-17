import InputField from "@/Components/Form/InputField";
import FileInput from "@/Components/Form/FileInput";
import MainLayout from "@/Layouts/MainLayout";
import { useForm, Link, router } from "@inertiajs/react";
import { useEffect } from "react";

const Edit = ({ solution }) => {
    const { data, setData,  errors, processing } = useForm({
        name: solution.name || "",
        description: solution.description || "",
        image: null, // New file (if user uploads)
    });

    useEffect(() => {
        console.log("Form Errors:", errors);
    }, [errors]);

    // Handle input changes
    const handleChange = (e) => {
        const { name, value, type, checked } = e.target;
        setData(name, type === "checkbox" ? checked : value);
    };

    // Handle file input changes
    const handleFileChange = (e) => {
        const { name, files } = e.target;
        setData(name, files[0]); // Set only the first selected file
    };

    // Handle form submission
    const handleSubmit = (e) => {
        e.preventDefault();

        // Create FormData for file uploads

        const formData = new FormData();

        // Append all fields, including name and description
        formData.append("_method", "put"); // Ensure no null values
        formData.append("name", data.name || ""); // Ensure no null values
        formData.append("description", data.description || ""); // Ensure no null values

        // Append image if a new one is selected
        if (data.image) {
            formData.append("image", data.image);
        }

        console.log(formData)

        router.post(route("solutions.update", solution.id), formData );
    };

    return (
        <MainLayout>
            <h2 className="text-2xl font-bold">Edit Solution</h2>
            <div className="p-10 rounded-md bg-white shadow-md">
                <form onSubmit={handleSubmit} encType="multipart/form-data" className="space-y-4">
                    <InputField
                        label="Solution Name"
                        name="name"
                        value={data.name || ""}
                        onChange={handleChange}
                        placeholder="Enter solution name"
                        error={errors.name}
                    />

                    <InputField
                        label="Solution Description"
                        name="description"
                        value={data.description || ""}
                        onChange={handleChange}
                        placeholder="Enter solution description"
                        error={errors.description}
                    />

                    <FileInput
                        label="Solution Icon"
                        name="image"
                        onChange={handleFileChange}
                        defaultFile={solution.image ? `/storage/${solution.image}` : null}
                        error={errors.image}
                        placeholder="Image size must be 50x50"
                    />

                    {solution.image && (
                        <div>
                            <p className="text-sm text-gray-600">Current Image:</p>
                            <img
                                src={`/storage/${solution.image}`}
                                alt="Service Icon"
                                className="w-16 h-16 rounded-md border"
                            />
                        </div>
                    )}

                    <div className="flex justify-between gap-5">
                        <button
                            type="submit"
                            className="bg-blue-500 text-white px-5 py-3 rounded"
                            disabled={processing}
                        >
                            {processing ? "Updating..." : "Update Solution"}
                        </button>
                        <Link
                            href={route("solutions.index")}
                            className="bg-red-500 text-white px-5 py-3 rounded"
                        >
                            Cancel
                        </Link>
                    </div>
                </form>
            </div>
        </MainLayout>
    );
};

export default Edit;
