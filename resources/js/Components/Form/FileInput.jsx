import { useState, useEffect } from "react";

function FileInput({
  label,
  id,
  name,
  onChange,
  placeholder,
  defaultFile,
  error,  // New prop for validation errors
}) {
  const [selectedFile, setSelectedFile] = useState(null);
  const [preview, setPreview] = useState(defaultFile ? defaultFile : null);

  console.log(preview);

  // Handle file selection
  const handleFileChange = (e) => {
    const file = e.target.files[0];
    setSelectedFile(file);

    // If a file is selected, update preview with a temporary URL
    if (file) {
      setPreview(URL.createObjectURL(file));
    } else {
      setPreview(defaultFile ? defaultFile : null);
    }

    if (onChange) {
      onChange(e);
    }
  };

  return (
    <div className="w-full mx-auto my-5">
      <label
        htmlFor={id}
        className="block mb-2 text-base font-medium text-gray-900 dark:text-white"
      >
        {label}
      </label>
      <input
        type="file"
        id={id}
        name={name}
        onChange={handleFileChange}
        className={`p-2 w-full text-sm text-gray-900 border rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 ${error ? 'border-red-500' : 'border-gray-300'}`}
        aria-describedby={`${id}_help`}
      />
      {placeholder && (
        <div className="mt-1 text-sm text-gray-500 dark:text-gray-300" id={`${id}_help`}>
          {placeholder}
        </div>
      )}

      {/* Show selected file name */}
      {selectedFile && (
        <div className="mt-2 text-sm text-gray-700 dark:text-gray-300">
          <strong>Selected File:</strong> {selectedFile.name}
        </div>
      )}

      {/* Show existing or selected image preview */}
      {preview && (
        <div className="mt-2">
          <img
            src={preview}
            alt="Preview"
            className="w-32 h-32 rounded border border-gray-300"
          />
        </div>
      )}

      {/* Display validation error */}
      {error && (
        <div className="mt-2 text-sm text-red-500">
          <strong>{error}</strong>
        </div>
      )}
    </div>
  );
}

export default FileInput;
